<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Forms\Components\TextInput;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Arr;
use Modules\UI\Actions\Icon\GetAllIconsAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;
use Webmozart\Assert\Assert;

class IconPicker extends XotBaseTextInput
<<<<<<< HEAD
=======
=======
use Webmozart\Assert\Assert;

class IconPicker extends TextInput
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
{
    protected function setUp(): void
    {
        parent::setUp();

        $icons = app(GetAllIconsAction::class)->execute();

        $packs = array_keys($icons);
        /** @var list<int|string> $packsKeys */
        $packsKeys = $packs;
        $packsCombined = array_combine($packsKeys, $packsKeys);
        /** @var array<string, string> $packs */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $packs = $packsCombined ?: [];

        $this->suffixAction(
            Action::make('icon')
                ->icon(static fn (?string $state) => $state)
                ->schema([
                    Select::make('pack')
                        ->options(static function () use ($packs): array {
<<<<<<< HEAD
=======
=======
        $packs = $packsCombined ? $packsCombined : [];
        // dddx($icons->toCollection()->get('heroicons')->toArray());

        $this->suffixAction(
            Action::make('icon')
                ->icon(fn (?string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
                ->schema([
                    Select::make('pack')
                        ->options(function () use ($packs): array {
                            /* @var array<string, string> $packsOptions */
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                            return $packs;
                        })
                        ->reactive()
                        ->live(),
                    RadioIcon::make('newstate')
                        ->options(function (Get $get) use ($icons): array {
                            $pack = $get('pack');
<<<<<<< HEAD
                            if (! \is_string($pack)) {
=======
<<<<<<< HEAD
                            if (! \is_string($pack)) {
=======
                            if (! is_string($pack)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                                return [];
                            }
                            $key = $pack.'.icons';
                            $optsRaw = Arr::get($icons, $key, []);
                            Assert::isArray(
                                $optsRaw,
                                '['.__LINE__.']['.class_basename($this).']',
                            );
                            /** @var array<int|string, mixed> $optsRaw */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
                            $optsValues = array_map(
                                static fn ($v) => SafeStringCastAction::cast($v),
                                array_values($optsRaw),
                            );
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(
                                static fn ($k) => SafeStringCastAction::cast($k),
                                array_keys($optsRaw),
                            );
<<<<<<< HEAD
=======
=======
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                            $optsCombined = array_combine($optsKeys, $optsValues);

                            return $optsCombined ? $optsCombined : [];
                        })
                        ->inline()
                        ->inlineLabel(false),
                ])
<<<<<<< HEAD
                ->action(static function (array $data, Set $set): void {
=======
<<<<<<< HEAD
                ->action(static function (array $data, Set $set): void {
=======
                ->action(function (array $data, Set $set) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                    $set('icon', $data['newstate']);
                }),
        );
    }
}
