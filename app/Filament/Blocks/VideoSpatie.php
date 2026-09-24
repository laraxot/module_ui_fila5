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

final class VideoSpatie
{
    public static function make(string $name = 'video_spatie', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
                    ->default(Str::uuid()->toString(...))
<<<<<<< HEAD
<<<<<<< .merge_file_ug2JQa
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_1oo0iq
                    ->formatStateUsing(static function (mixed $state): string {
                        $value = $state ?? Str::uuid()->toString();

                        return \is_string($value) ? $value : Str::uuid()->toString();
                    })
<<<<<<< .merge_file_ug2JQa
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_1oo0iq
=======
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
>>>>>>> 0dadab4 (Lint)
                    ->live(),
                // ->required(),

                SpatieMediaLibraryFileUpload::make('video')
                    ->live()
                    ->hiddenLabel()
                    // ->imagePreviewHeight('250')
                    // ->panelLayout('integrated')
<<<<<<< HEAD
<<<<<<< .merge_file_ug2JQa
<<<<<<< HEAD
                    ->imageResizeMode('cover')
=======
<<<<<<< HEAD
                    ->automaticallyResizeImagesMode('cover')
=======
<<<<<<< HEAD
                    ->imageResizeMode('cover')
=======
                    ->automaticallyResizeImagesMode('cover')
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->automaticallyResizeImagesMode('cover')
>>>>>>> .merge_file_1oo0iq
=======
                    ->imageResizeMode('cover')
>>>>>>> 0dadab4 (Lint)
                    ->panelAspectRatio('2:1')
                    ->maxSize(502400)
                    ->disk('local')
                    ->preserveFilenames()
                    ->openable()
                    ->previewable()
                    ->downloadable()
                    // ->rules(Rule::dimensions()->maxWidth(600)->maxHeight(800))
<<<<<<< HEAD
<<<<<<< .merge_file_ug2JQa
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
<<<<<<< HEAD
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
=======
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->collection(static fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(static function (
>>>>>>> .merge_file_1oo0iq
=======
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
>>>>>>> 0dadab4 (Lint)
                        HasForms $_livewire,
                        SpatieMediaLibraryFileUpload $_component,
                        TemporaryUploadedFile $state,
                        Get $get,
                        HasMedia $record,
                    ): void {
                        // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                        // $livewire->validateOnly($component->getStatePath());
                        Assert::string(
<<<<<<< HEAD
<<<<<<< .merge_file_ug2JQa
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                            $collectionName = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collectionName);
>>>>>>> .merge_file_1oo0iq
=======
>>>>>>> 0dadab4 (Lint)
                    }),
                /*
                 * Select::make('ratio')
                 * ->options(static::getRatios())
                 * ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),
                 *
                 * TextInput::make('alt')
                 * ->columnSpanFull(),
                 */
                TextInput::make('caption'),
                // ->columnSpanFull()
                // Filament\Forms\Components\SpatieMediaLibraryFileUpload::whereCustomProperties does not exist.
                // ->whereCustomProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')])
                // ->customProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')]),
                // Forms\Components\SpatieMediaLibraryFileUpload::make('media_id')
            ])
<<<<<<< HEAD
<<<<<<< HEAD
            ->columns('form' === $context ? 2 : 1);
=======
<<<<<<< HEAD
            ->columns($context === 'form' ? 2 : 1);
=======
<<<<<<< HEAD
            ->columns('form' === $context ? 2 : 1);
=======
            ->columns($context === 'form' ? 2 : 1);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            ->columns('form' === $context ? 2 : 1);
>>>>>>> 0dadab4 (Lint)
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
