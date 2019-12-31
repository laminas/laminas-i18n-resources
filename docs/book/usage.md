# Usage

To use the resources laminas-i18n-resources exposes, retrieve them from the
`Laminas\I18n\Translator\Resources` class and pass them to
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

If you are fetching `Laminas\I18n\Translator\Translator` via `laminas-servicemanager`,
you may want to automate injecting the translation messages. This can be done
using `laminas-servicemanager`'s
[delegator factories](https://docs.laminas.dev/laminas-servicemanager/delegators/).

As an example, consider the following delegator factory:

```php
use Interop\Container\ContainerInterface;
use Laminas\I18n\Translator\Resources;
use Laminas\ServiceManager\DelegatorFactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class TranslatorDelegator implements DelegatorFactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $name,
        callable $callback,
        array $options = null
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

        return $translator;
    }

    public function createDelegatorWithName(
        ServiceLocatorInterface $container,
        $name,
        $requestedName,
        $callback
    ) {
        return $this($container, $requestedName, $callback);
    }
}
```

> ### Forwards compatibility
>
> The above definition will work with both laminas-servicemanager v2 and v3
> releases. If you are targeting only v3 and up, you can remove the
> `createDelegatorWithName()` implementation.

You would then register this in your configuration:

```php
return [
    'service_manager' => [
        'delegators' => [
            'MvcTranslator' => [
                'TranslatorDelegator',
            ],
        ],
    ],
];
```
