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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
     * @return array<int, Component>
     */
    #[\Override]
    public static function getBlockSchema(): array
    {
        return [
            Repeater::make('items')
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
     * @return array<string, Component>
     */
    public static function getBlockSchema(): array
    {
        return [
            'items' => Repeater::make('items')
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
    public function getFormSchema(): array
=======
<<<<<<< HEAD
    public static function getFormSchema(): array
=======
<<<<<<< HEAD
    public function getFormSchema(): array
=======
    public static function getFormSchema(): array
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
