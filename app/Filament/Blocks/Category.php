<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Category extends XotBaseBlock
{
    /**
<<<<<<< HEAD
     * <<<<<<< .merge_file_S2WyyE.
=======
     * <<<<<<< HEAD.
>>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files)
     *
     * @return array<int, Component>
     *                               =======
     *                               <<<<<<< HEAD
     * @return array<int, Component>
     *                               =======
     * @return array<int, Component>
     *                               >>>>>>> laraxot/dev
<<<<<<< HEAD
     *                               >>>>>>> .merge_file_xgBAlu
=======
>>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files)
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->label(__('ui::blocks.category.fields.name.label'))
                ->helperText(__('ui::blocks.category.fields.name.helper_text')),
            TextInput::make('slug')
                ->required()
                ->label(__('ui::blocks.category.fields.slug.label'))
                ->helperText(__('ui::blocks.category.fields.slug.helper_text')),
            Select::make('parent_id')
                ->relationship('parent', 'name')
                ->label(__('ui::blocks.category.fields.parent.label'))
                ->helperText(__('ui::blocks.category.fields.parent.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.category.title');
    }
}
