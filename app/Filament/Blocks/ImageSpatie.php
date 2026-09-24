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
<<<<<<< .merge_file_vvFQTX
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
=======
=======
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
>>>>>>> .merge_file_p0GqKA
                    ->formatStateUsing(static function (mixed $state): string {
                        $value = $state ?? Str::uuid()->toString();

                        return \is_string($value) ? $value : Str::uuid()->toString();
                    }),
<<<<<<< .merge_file_vvFQTX
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Pj0Hqc
>>>>>>> .merge_file_p0GqKA
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
<<<<<<< .merge_file_vvFQTX
=======
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
<<<<<<< HEAD
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
=======
>>>>>>> .merge_file_p0GqKA
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> laraxot/dev
<<<<<<< .merge_file_vvFQTX
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> .merge_file_Pj0Hqc
>>>>>>> .merge_file_p0GqKA
                        HasForms $_livewire,
                        SpatieMediaLibraryFileUpload $_component,
                        TemporaryUploadedFile $state,
                        Get $get,
                        HasMedia $record,
                    ): void {
                        // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                        // $livewire->validateOnly($component->getStatePath());
                        Assert::string(
<<<<<<< .merge_file_vvFQTX
=======
<<<<<<< .merge_file_zTSv5Q
<<<<<<< HEAD
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $res = $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_p0GqKA
<<<<<<< HEAD
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
>>>>>>> laraxot/dev
=======
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
>>>>>>> .merge_file_Pj0Hqc
                    }),
                TextInput::make('caption'),
            ])
            ->columns('form' === $context ? 2 : 1);
<<<<<<< .merge_file_vvFQTX
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_p0GqKA
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
                    }),
                TextInput::make('caption'),
            ])
            ->columns($context === 'form' ? 2 : 1);
<<<<<<< .merge_file_vvFQTX
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_p0GqKA
>>>>>>> laraxot/dev
    }
}
