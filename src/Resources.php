<?php

declare(strict_types=1);

namespace Laminas\I18n\Translator;

/**
 * Provide paths and patterns for locating laminas-i18n translation files.
 */
final class Resources
{
    /**
     * Non-instantiable.
     */
    private function __construct()
    {
    }

    /**
     * Return the base path to the language resources.
     *
     * @return string
     */
    public static function getBasePath()
    {
        return __DIR__ . '/../languages/';
    }

    /**
     * Retrieve the translation file pattern for laminas-captcha translations.
     *
     * @return string
     */
    public static function getPatternForCaptcha()
    {
        return '%s/Laminas_Captcha.php';
    }

    /**
     * Retrieve the translation file pattern for laminas-validator translations.
     *
     * @return string
     */
    public static function getPatternForValidator()
    {
        return '%s/Laminas_Validate.php';
    }
}
