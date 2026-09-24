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
<<<<<<< .merge_file_wqE0Rv
<<<<<<< HEAD
<<<<<<< .merge_file_gFx5sY
<<<<<<< HEAD
                            ->enableReordering()
=======
<<<<<<< HEAD
                            ->reorderable()
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
                            ->enableReordering()
=======
                            ->reorderable()
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                            ->reorderable()
>>>>>>> .merge_file_EBBQM2
=======
>>>>>>> 804451c (Lint)
=======
                            ->reorderable()
>>>>>>> .merge_file_ck5yDP
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
<<<<<<< .merge_file_wqE0Rv
<<<<<<< HEAD
<<<<<<< .merge_file_gFx5sY
<<<<<<< HEAD
                //     ->enableReordering()
=======
<<<<<<< HEAD
                //     ->reorderable()
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
                //     ->enableReordering()
=======
                //     ->reorderable()
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                //     ->reorderable()
>>>>>>> .merge_file_EBBQM2
=======
>>>>>>> 804451c (Lint)
=======
                //     ->enableReordering()
>>>>>>> .merge_file_ck5yDP
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
<<<<<<< .merge_file_wqE0Rv
<<<<<<< HEAD
            ->columns('form' === $context ? 2 : 1);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->columns($context === 'form' ? 2 : 1);
=======
<<<<<<< HEAD
            ->columns('form' === $context ? 2 : 1);
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> .merge_file_ck5yDP
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
