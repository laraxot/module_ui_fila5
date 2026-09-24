<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
<<<<<<< .merge_file_7alSIt
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
>>>>>>> .merge_file_xBumjC

final class Hero
{
    public static function make(string $name = 'hero', string $context = 'form'): Block
    {
<<<<<<< .merge_file_7alSIt
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
        // ---------------
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('hero', true);

        // ---------------
>>>>>>> .merge_file_xBumjC
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
