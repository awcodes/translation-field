<?php

namespace Awcodes\TranslationField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class TranslationFieldServiceProvider extends PluginServiceProvider
{
    public static string $name = 'translation-field';

    protected array $styles = [
        'plugin-translation-field' => __DIR__.'/../resources/dist/translation-field.css',
    ];

    protected array $scripts = [
        'plugin-translation-field' => __DIR__.'/../resources/dist/translation-field.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile();
    }
}
