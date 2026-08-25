<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Navigation extends XotBaseBlock
{
    /**
<<<<<<< HEAD
    * @return array<string, Component>
=======
     * @return array<string, Component>
>>>>>>> laraxot/dev
     */
    #[\Override]
    public static function getBlockSchema(): array
    {
        return [
<<<<<<< HEAD
           'items' => Repeater::make('items')
=======
            'items' => Repeater::make('items')
>>>>>>> laraxot/dev
                ->label(__('ui::blocks.navigation.fields.items.label'))
                ->schema([
                    TextInput::make('label')
                        ->label(__('ui::blocks.navigation.fields.text.label'))
                        ->required(),
                    TextInput::make('url')
                        ->label(__('ui::blocks.navigation.fields.url.label'))
                        ->url()
                        ->required(),
                ])
                ->columns(2)
                ->minItems(1),
        ];
    }

    /**
     * @return array<string, Component>
     */
<<<<<<< HEAD
   public static function getFormSchema(): array
=======
    public static function getFormSchema(): array
>>>>>>> laraxot/dev
    {
        return [
            'items' => Repeater::make('items')
                ->label(self::trans('blocks.navigation.fields.items.label'))
                ->schema([
                    TextInput::make('text')
                        ->label(self::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')
                        ->label(self::trans('blocks.navigation.fields.url.label')),
                ]),
        ];
    }
}
