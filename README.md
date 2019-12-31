# laminas-i18n-resources

This "component" provides translation resources, specifically for `laminas/laminas-validate` and
`laminas/laminas-captcha`, for use with `laminas/laminas-i18n`'s Translator subcomponent.

- File issues at https://github.com/laminas/laminas-i18n-resources/issues
- Documentation is at https://getlaminas.org/docs

## Installation

```console
$ composer require laminas/laminas-i18n-resources
```

## Usage

To use the resources, you need to use the provided `Laminas\I18n\Translator\Resources` class to
retrieve the path and pattern to provide to
`Laminas\I18n\Translator\Translator::addTranslationFilePattern()`:

```php
use Laminas\I18n\Translator\Resources;
use Laminas\I18n\Translator\Translator;

$translator = new Translator();
$translator->addTranslationFilePattern(
    'phpArray',
    Resources::getBasePath(),
    Resources::getPatternForValidator()
);

echo $translator->translate('Invalid type given. String expected', 'default', 'es');
```

You can also use the `getPatternForCaptcha()` method to setup translation messages for
`laminas-captcha`:

```php
$translator->addTranslationFilePattern(
    'phpArray',
    Resources::getBasePath(),
    Resources::getPatternForCaptcha()
);
```

## Automating resource injection

If you are using `Laminas\I18n\Translator\Translator` via the `laminas-servicemanager`, you may want to
automate injecting the translation messages. This can be done using `laminas-servicemanager`'s
[delegator factories](https://docs.laminas.dev/laminas.service-manager.delegator-factories.html).

As an example, consider the following delegator factory:

```php
use Laminas\I18n\Translator\Resources;
use Laminas\ServiceManager\DelegatorFactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class TranslatorDelegator implements DelegatorFactoryInterface
{
    public function createDelegatorWithName(
        ServiceLocatorInterface $services,
        $name,
        $requestedName,
        $callback
    ) {
        $translator = $callback();
        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForValidator()
        );
        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForCaptcha()
        );
    }
}
```

You would then register this in your configuration:

```php
return [
    'service_manager' => [
        'delegators' => [
            'MvcTranslator' => 'TranslatorDelegator',
        ],
    ],
];
```
