<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\RichEditor;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Page extends XotBaseBlock
{
<<<<<<< HEAD
    /**
     * @return array<int, \Filament\Schemas\Components\Component>
     */
<<<<<<< HEAD
    public static function getFormSchemaOld(): array
=======
    public static function getFormSchema(): array
>>>>>>> 990a9de5 (.)
=======
    public static function getFormSchema(): array
>>>>>>> 6e44b7d5 (.)
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
