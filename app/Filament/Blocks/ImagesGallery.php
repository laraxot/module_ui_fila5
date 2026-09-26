<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;

final class ImagesGallery
{
    public static function make(string $name = 'images_gallery', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                Repeater::make('gallery')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            // ->image()
                            // ->maxSize(5000)
                            ->multiple()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_sokSPj
<<<<<<< HEAD
                            ->enableReordering()
=======
                            ->reorderable()
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_gFx5sY
<<<<<<< HEAD
                            ->enableReordering()
=======
<<<<<<< HEAD
                            ->reorderable()
=======
<<<<<<< HEAD
                            ->enableReordering()
=======
                            ->reorderable()
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                            ->reorderable()
>>>>>>> .merge_file_EBBQM2
>>>>>>> .merge_file_o8RN7F
=======
                            ->reorderable()
>>>>>>> laraxot/dev
=======
                            ->reorderable()
>>>>>>> laraxot/dev
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull()
                            // ->collection('avatars')
                            // ->conversion('thumbnail')
                            ->disk('uploads')
                            ->directory('photos'),
                        TextInput::make('title')->columnSpanFull(),
                        TextInput::make('subtitle')->columnSpanFull(),
                        Select::make('version')
                            ->required()
                            ->options([
                                'v1' => 'versione 1',
                                'v2' => 'versione 2',
                            ]),
                    ])
                    ->columnSpanFull(),
                // FileUpload::make('image')
                //     ,
                // SpatieMediaLibraryFileUpload::make('image')
                //         // ->image()
                //         // ->maxSize(5000)
                //     ->multiple()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_sokSPj
=======
<<<<<<< .merge_file_gFx5sY
<<<<<<< HEAD
                //     ->enableReordering()
=======
<<<<<<< HEAD
                //     ->reorderable()
=======
>>>>>>> .merge_file_o8RN7F
<<<<<<< HEAD
                //     ->enableReordering()
=======
                //     ->reorderable()
>>>>>>> laraxot/dev
<<<<<<< .merge_file_sokSPj
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                //     ->reorderable()
>>>>>>> .merge_file_EBBQM2
>>>>>>> .merge_file_o8RN7F
=======
                //     ->enableReordering()
>>>>>>> laraxot/dev
=======
                //     ->enableReordering()
>>>>>>> laraxot/dev
                //     ->openable()
                //     ->downloadable()
                //     ->columnSpanFull()
                //         // ->collection('avatars')
                //         // ->conversion('thumbnail')
                //     ->disk('uploads')
                //     ->directory('photos'),
                // TextInput::make('url')
                //     ,
                // Select::make('ratio')
                //     ->options(static::getRatios())
                //     ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),
                // TextInput::make('alt')
                //     ->columnSpanFull(),
                // TextInput::make('caption')
                //     ->columnSpanFull(),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_sokSPj
=======
            ->columns('form' === $context ? 2 : 1);
=======
<<<<<<< HEAD
            ->columns($context === 'form' ? 2 : 1);
=======
<<<<<<< HEAD
>>>>>>> .merge_file_o8RN7F
            ->columns('form' === $context ? 2 : 1);
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_sokSPj
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_o8RN7F
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> laraxot/dev
=======
            ->columns('form' === $context ? 2 : 1);
>>>>>>> laraxot/dev
    }

    /**
     * @return array<string, string>
     */
    public static function getRatios(): array
    {
        return [
            '4-3' => '4/3',
            '3-4' => '3/4',
            'free' => 'free',
        ];
    }

    public static function getRatioClass(string $ratio): string
    {
        return match ($ratio) {
            '4-3' => 'aspect-[4/3]',
            '3-4' => 'aspect-[3/4]',
            default => '',
        };
    }
}
