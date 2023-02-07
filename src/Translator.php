<?php

namespace Awcodes\TranslationField;

use Closure;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

class Translator extends Tabs
{
    protected array|null $languages = null;

    protected Field|null $field = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tabs(function(): array {
            $tabs = [];

            foreach ($this->getLanguages() as $key => $language) {
                $component = $this->getField();
                if (! array_key_exists(Str::of($component->getName())->beforeLast('.')->toString(), $this->languages)) {
                    invade($component)->name = $component->getName() . '.' . $key;
                }
                
                $tabs[] = Tabs\Tab::make($language)
                    ->schema([
                        $component
                    ]);
            }

            return $tabs;
        });
    }

    public function languages(array|null $languages = null): static
    {
        $this->languages = $languages;

        return $this;
    }

    public function field(Field $field): static
    {
        $this->field = $field;

        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages ?? config('translation-field.languages');
    }

    public function getField(): Field
    {
        return $this->field;
    }
}

//Forms\Components\Tabs::make('message')
//    ->tabs([
//        Forms\Components\Tabs\Tab::make('English')
//            ->schema([
//                Forms\Components\TextInput::make('title.en')
//                    ->label('Title')
//                    ->required(),
//            ]),
//        Forms\Components\Tabs\Tab::make('Spanish')
//            ->schema([
//                Forms\Components\TextInput::make('title.es')
//                    ->label('Title')
//            ])
//    ]),
