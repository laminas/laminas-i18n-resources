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

        foreach (glob(Resources::getBasePath() . '/*/*.php') as $file) {
            $language = basename(dirname($file));

            /** @var array<string, string> $messages */
            $messages = require $file;

            foreach ($messages as $message) {
                if (! is_string($message)) {
                    continue;
                }

                foreach (preg_split('/[^\p{L}]+/u', $message, -1, PREG_SPLIT_NO_EMPTY) as $word) {
                    $alphabets = preg_match('/\p{sc=Latin}/u', $word)
                        + preg_match('/\p{sc=Cyrillic}/u', $word)
                        + preg_match('/\p{sc=Greek}/u', $word);

                    if ($alphabets > 1) {
                        $invalid[] = $language . ': ' . $word;
                    }
                }
            }
        }

        self::assertSame([], array_values(array_unique($invalid)));
    }
}
