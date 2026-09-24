<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Post extends XotBaseBlock
{
    /**
     * <<<<<<< HEAD
     * <<<<<<< .merge_file_L3eOso.
     * =======
     * <<<<<<< HEAD.
     * >>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files).
     *
     * @return array<int, Component>
     *                               =======
     *                               <<<<<<< HEAD
     * @return array<int, Component>
     *                               =======
     * @return array<int, Component>
     *                               >>>>>>> laraxot/dev
     *                               <<<<<<< HEAD
     *                               >>>>>>> .merge_file_Hob6Pm
     *                               =======
     *                               >>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files)
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->label(__('ui::blocks.post.fields.title.label'))
                ->helperText(__('ui::blocks.post.fields.title.helper_text')),
            RichEditor::make('content')
                ->required()
                ->label(__('ui::blocks.post.fields.content.label'))
                ->helperText(__('ui::blocks.post.fields.content.helper_text')),
            FileUpload::make('image')
                ->image()
                ->label(__('ui::blocks.post.fields.image.label'))
                ->helperText(__('ui::blocks.post.fields.image.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.post.title');
    }
}
