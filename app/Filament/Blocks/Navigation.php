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
<<<<<<< .merge_file_dkbKjD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_VfWMxq
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fW81i1
     * @return array<int, Component>
=======
     * @return array<string, Component>
>>>>>>> .merge_file_fdBkUg
     */
    #[\Override]
    public static function getBlockSchema(): array
    {
        return [
<<<<<<< .merge_file_VfWMxq
            Repeater::make('items')
<<<<<<< .merge_file_dkbKjD
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fW81i1
>>>>>>> laraxot/dev
     * @return array<string, Component>
     */
    public static function getBlockSchema(): array
    {
        return [
            'items' => Repeater::make('items')
<<<<<<< HEAD
=======
<<<<<<< .merge_file_dkbKjD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            'items' => Repeater::make('items')
>>>>>>> .merge_file_fdBkUg
>>>>>>> .merge_file_fW81i1
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
<<<<<<< .merge_file_dkbKjD
=======
<<<<<<< .merge_file_VfWMxq
<<<<<<< HEAD
    public function getFormSchema(): array
=======
<<<<<<< HEAD
    public static function getFormSchema(): array
=======
>>>>>>> .merge_file_fW81i1
<<<<<<< HEAD
    public function getFormSchema(): array
=======
    public static function getFormSchema(): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_dkbKjD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public static function getFormSchema(): array
>>>>>>> .merge_file_fdBkUg
>>>>>>> .merge_file_fW81i1
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
