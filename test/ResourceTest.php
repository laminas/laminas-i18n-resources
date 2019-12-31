<?php

/**
 * @see       https://github.com/laminas/laminas-i18n-resources for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n-resources/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n-resources/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\I18n\Translator;

use Laminas\I18n\Translator\Resources;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    public function testBasePath()
    {
        $path = Resources::getBasePath();

        $this->assertDirectoryExists($path);
    }

    public function testCaptchaPattern()
    {
        $pattern = Resources::getPatternForCaptcha();

        $this->assertSame('%s/Laminas_Captcha.php', $pattern);
    }

    public function testValidatorPattern()
    {
        $pattern = Resources::getPatternForValidator();

        $this->assertSame('%s/Laminas_Validate.php', $pattern);
    }
}
