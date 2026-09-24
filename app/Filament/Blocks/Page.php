<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Page extends XotBaseBlock
{
    /**
<<<<<<< HEAD
     * <<<<<<< .merge_file_nLvRJE.
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
     *                               >>>>>>> .merge_file_lwLJ0i
=======
>>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files)
     */
    public static function getFormSchema(): array
    {
        return [
            RichEditor::make('content')
                ->required()
                ->label(__('ui::blocks.page.fields.content.label'))
                ->helperText(__('ui::blocks.page.fields.content.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.page.title');
    }
}
