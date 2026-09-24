<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Webmozart\Assert\Assert;

final class ImageSpatie
{
    public static function make(string $name = 'image_spatie', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
                    ->default(Str::uuid()->toString(...))
<<<<<<< .merge_file_9U56AN
<<<<<<< HEAD
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Pj0Hqc
=======
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
=======
>>>>>>> 804451c (Lint)
                    ->formatStateUsing(static function (mixed $state): string {
                        $value = $state ?? Str::uuid()->toString();

                        return \is_string($value) ? $value : Str::uuid()->toString();
                    }),
<<<<<<< HEAD
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Pj0Hqc
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
>>>>>>> .merge_file_V9WbbQ
                // ->live()
                SpatieMediaLibraryFileUpload::make('image')
                    ->live()
                    ->hiddenLabel()
                    ->imagePreviewHeight('666')
                    // ->panelLayout('integrated')
                    // ->imageResizeMode('cover')
                    // ->panelAspectRatio('2:1')
                    ->maxSize(102400)
                    ->disk('local')
                    ->image()
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    // ->rules(Rule::dimensions()->maxWidth(600)->maxHeight(800))
<<<<<<< .merge_file_9U56AN
<<<<<<< HEAD
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
<<<<<<< HEAD
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> .merge_file_Pj0Hqc
=======
>>>>>>> 804451c (Lint)
=======
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
>>>>>>> .merge_file_V9WbbQ
                        HasForms $_livewire,
                        SpatieMediaLibraryFileUpload $_component,
                        TemporaryUploadedFile $state,
                        Get $get,
                        HasMedia $record,
                    ): void {
                        // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                        // $livewire->validateOnly($component->getStatePath());
                        Assert::string(
<<<<<<< .merge_file_9U56AN
<<<<<<< HEAD
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
=======
>>>>>>> .merge_file_V9WbbQ
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $res = $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
<<<<<<< .merge_file_9U56AN
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
>>>>>>> .merge_file_Pj0Hqc
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_V9WbbQ
                    }),
                TextInput::make('caption'),
            ])
            ->columns('form' === $context ? 2 : 1);
<<<<<<< .merge_file_9U56AN
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
                    }),
                TextInput::make('caption'),
            ])
            ->columns($context === 'form' ? 2 : 1);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_V9WbbQ
    }
}
