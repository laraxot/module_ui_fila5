<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Contact extends XotBaseBlock
{
    /**
     * <<<<<<< HEAD
     * <<<<<<< .merge_file_LIOMxB.
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
     *                               >>>>>>> .merge_file_pXIoFN
     *                               =======
     *                               >>>>>>> 1b458f2 (refactor: remove conflict markers from multiple PHP files)
     */
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->label(__('ui::blocks.contact.fields.name.label'))
                ->helperText(__('ui::blocks.contact.fields.name.helper_text')),
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('ui::blocks.contact.fields.email.label'))
                ->helperText(__('ui::blocks.contact.fields.email.helper_text')),
            TextInput::make('phone')
                ->tel()
                ->label(__('ui::blocks.contact.fields.phone.label'))
                ->helperText(__('ui::blocks.contact.fields.phone.helper_text')),
            Textarea::make('message')
                ->required()
                ->label(__('ui::blocks.contact.fields.message.label'))
                ->helperText(__('ui::blocks.contact.fields.message.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.contact.title');
    }
}
