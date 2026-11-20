<?php

declare(strict_types=1);

namespace LaminasTest\I18n\Translator;

use Laminas\I18n\Translator\Resources;
use PHPUnit\Framework\TestCase;

use function array_unique;
use function array_values;
use function basename;
use function dirname;
use function glob;
use function is_string;
use function preg_match;
use function preg_split;

use const PREG_SPLIT_NO_EMPTY;

final class TranslationTest extends TestCase
{
    public function testWordsDoNotMixAlphabets(): void
    {
        $invalid = [];

        $files = glob(Resources::getBasePath() . '/*/*.php');
        self::assertIsArray($files);

        foreach ($files as $file) {
            $language = basename(dirname($file));

            /**
             * @psalm-suppress UnresolvableInclude
             * @var array<array-key, string|array<array-key, string>> $messages
             */
            $messages = require $file;

            foreach ($messages as $message) {
                if (! is_string($message)) {
                    continue;
                }

                $words = preg_split('/[^\p{L}]+/u', $message, -1, PREG_SPLIT_NO_EMPTY);
                self::assertIsArray($words);

                foreach ($words as $word) {
                    $alphabets = (preg_match('/\p{Latin}/u', $word) === 1 ? 1 : 0)
                        + (preg_match('/\p{Cyrillic}/u', $word) === 1 ? 1 : 0)
                        + (preg_match('/\p{Greek}/u', $word) === 1 ? 1 : 0);

                    if ($alphabets > 1) {
                        $invalid[] = $language . ': ' . $word;
                    }
                }
            }
        }

        self::assertSame([], array_values(array_unique($invalid)));
    }
}
