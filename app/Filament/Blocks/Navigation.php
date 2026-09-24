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
<<<<<<< .merge_file_VfWMxq
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
     * @return array<int, Component>
=======
     * @return array<string, Component>
>>>>>>> .merge_file_fdBkUg
=======
<<<<<<< HEAD
     * @return array<int, Component>
>>>>>>> 804451c (Lint)
     */
    #[\Override]
    public static function getBlockSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< .merge_file_VfWMxq
            Repeater::make('items')
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
            Repeater::make('items')
=======
>>>>>>> 804451c (Lint)
     * @return array<string, Component>
     */
    public static function getBlockSchema(): array
    {
        return [
            'items' => Repeater::make('items')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            'items' => Repeater::make('items')
>>>>>>> .merge_file_fdBkUg
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
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
<<<<<<< .merge_file_VfWMxq
<<<<<<< HEAD
    public function getFormSchema(): array
=======
<<<<<<< HEAD
    public static function getFormSchema(): array
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
    public function getFormSchema(): array
=======
    public static function getFormSchema(): array
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public static function getFormSchema(): array
>>>>>>> .merge_file_fdBkUg
=======
>>>>>>> 804451c (Lint)
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
