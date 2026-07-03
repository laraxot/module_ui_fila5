<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Arr;
use Modules\UI\Actions\Icon\GetAllIconsAction;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeStringCastAction;
=======
>>>>>>> c001364 (.)
use Webmozart\Assert\Assert;

class IconPicker extends TextInput
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
        $packs = $packsCombined ? $packsCombined : [];
=======
        $packs = $packsCombined ?: [];
        // dddx($icons->toCollection()->get('heroicons')->toArray());
>>>>>>> c001364 (.)

        $this->suffixAction(
            Action::make('icon')
                ->icon(static fn (?string $state) => $state)
<<<<<<< HEAD
=======
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
>>>>>>> c001364 (.)
                ->schema([
                    Select::make('pack')
                        ->options(static function () use ($packs): array {
                            return $packs;
                        })
                        ->reactive()
                        ->live(),
                    RadioIcon::make('newstate')
                        ->options(function (Get $get) use ($icons): array {
                            $pack = $get('pack');
                            if (! \is_string($pack)) {
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
                            $optsValues = array_map(
                                static fn ($v) => SafeStringCastAction::cast($v),
                                array_values($optsRaw),
                            );
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(
                                static fn ($k) => SafeStringCastAction::cast($k),
                                array_keys($optsRaw),
                            );
=======
                            $optsValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(static fn ($k) => \is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(static fn ($k) => \is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(static fn ($k) => \is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(static fn ($k) => \is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(static fn ($k) => \is_string($k) ? $k : (string) $k, array_keys($optsRaw));
>>>>>>> c001364 (.)
                            $optsCombined = array_combine($optsKeys, $optsValues);

                            return $optsCombined ? $optsCombined : [];
                        })
                        ->inline()
                        ->inlineLabel(false),
                ])
                ->action(static function (array $data, Set $set): void {
                    $set('icon', $data['newstate']);
                }),
        );
    }
}
