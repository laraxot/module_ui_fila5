<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
=======
>>>>>>> laraxot/dev

final class Hero
{
    public static function make(string $name = 'hero', string $context = 'form'): Block
    {
<<<<<<< HEAD
<<<<<<< .merge_file_J1jDH7
=======
        // ---------------
>>>>>>> laraxot/dev
=======
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('hero', true);

        // ---------------
=======
<<<<<<< HEAD
        // ---------------
=======
<<<<<<< HEAD
=======
        // ---------------
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_9seAIt
        return Block::make($name)->schema([
            TextInput::make('title'),
            RichEditor::make('text'),
            FileUpload::make('background')
                // ->acceptedFileTypes(['application/pdf'])
                // ->image()
                ->directory('blocks')
                ->preserveFilenames(),
            /*
             * RadioImage::make('view')
             * ->options($options),
             * // */
            /*
             * Select::make('_tpl')
             * ->options($views),
             * //*/
            Repeater::make('buttons')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('class'),
                    TextInput::make('link'),
                ])
                ->columns(3),
        ]);
    }
}
