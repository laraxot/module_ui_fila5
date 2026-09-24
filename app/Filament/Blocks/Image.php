<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
<<<<<<< .merge_file_AY86Ds
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
=======
<<<<<<< .merge_file_VS2tKC
=======
<<<<<<< .merge_file_a0oyY7
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
=======
>>>>>>> .merge_file_ZyIi2R
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_VS2tKC
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Utilities\Set;
>>>>>>> .merge_file_cYprF7
>>>>>>> .merge_file_ZyIi2R
>>>>>>> .merge_file_8QiBOC

class Image
{
    public static function make(string $name = 'image', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                FileUpload::make('image'),
                TextInput::make('url'),
                Select::make('ratio')
                    ->options(static::getRatios())
<<<<<<< .merge_file_AY86Ds
                    ->afterStateHydrated(function (mixed $state, mixed $set): void {
                        if (! $state && is_callable($set)) {
=======
<<<<<<< .merge_file_VS2tKC
=======
<<<<<<< .merge_file_a0oyY7
>>>>>>> .merge_file_ZyIi2R
<<<<<<< HEAD
                    ->afterStateHydrated(function (mixed $state, mixed $set): void {
                        if (! $state && is_callable($set)) {
=======
<<<<<<< .merge_file_VS2tKC
                    ->afterStateHydrated(static function (?string $state, Set $set): void {
                        if (! $state) {
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
                    ->afterStateHydrated(static function (?string $state, Set $set): void {
                        if (! $state) {
=======
<<<<<<< HEAD
                    ->afterStateHydrated(function (mixed $state, mixed $set): void {
                        if (! $state && is_callable($set)) {
=======
                    ->afterStateHydrated(static function (?string $state, Set $set): void {
                        if (! $state) {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->afterStateHydrated(static function (?string $state, Set $set): void {
                        if (! $state) {
>>>>>>> .merge_file_cYprF7
>>>>>>> .merge_file_ZyIi2R
>>>>>>> .merge_file_8QiBOC
                            $set('ratio', '4-3');
                        }
                    }),
                TextInput::make('alt')->columnSpanFull(),
                TextInput::make('caption')->columnSpanFull(),
            ])
            ->columns('form' === $context ? 2 : 1);
<<<<<<< .merge_file_AY86Ds
=======
=======
<<<<<<< .merge_file_VS2tKC
            ->columns($context === 'form' ? 2 : 1);
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
>>>>>>> .merge_file_ZyIi2R
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8QiBOC
    }

    /**
     * @return array<string, string>
     */
<<<<<<< .merge_file_AY86Ds
    /**
     * @return array<string, string>
     */
=======
<<<<<<< .merge_file_VS2tKC
=======
<<<<<<< .merge_file_a0oyY7
>>>>>>> .merge_file_ZyIi2R
<<<<<<< HEAD
    /**
     * @return array<string, string>
     */
=======
<<<<<<< .merge_file_VS2tKC
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<string, string>
     */
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cYprF7
>>>>>>> .merge_file_ZyIi2R
>>>>>>> .merge_file_8QiBOC
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

    /**
<<<<<<< .merge_file_AY86Ds
     * @return array<int, \Filament\Schemas\Components\Component>
=======
<<<<<<< .merge_file_VS2tKC
=======
<<<<<<< .merge_file_a0oyY7
<<<<<<< HEAD
     * @return array<int, \Filament\Schemas\Components\Component>
=======
<<<<<<< HEAD
     * @return array<int, Component>
=======
>>>>>>> .merge_file_ZyIi2R
<<<<<<< HEAD
     * @return array<int, \Filament\Schemas\Components\Component>
=======
     * @return array<int, Component>
>>>>>>> laraxot/dev
<<<<<<< .merge_file_VS2tKC
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * @return array<int, Component>
>>>>>>> .merge_file_cYprF7
>>>>>>> .merge_file_ZyIi2R
>>>>>>> .merge_file_8QiBOC
     */
    public static function getFormSchema(): array
    {
        return [
            FileUpload::make('image')
                ->required()
                ->image()
                ->maxSize(5120),
            TextInput::make('url')->url()->maxLength(255),
        ];
    }
}
