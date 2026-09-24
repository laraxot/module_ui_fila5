<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
<<<<<<< .merge_file_dSsC7Z
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_3Qh3hN
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Arr;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
<<<<<<< .merge_file_dSsC7Z
<<<<<<< HEAD
use Webmozart\Assert\Assert;

class IconPicker extends TextInput
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;

class IconPicker extends TextInput
=======
>>>>>>> laraxot/dev
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;
use Webmozart\Assert\Assert;

class IconPicker extends XotBaseTextInput
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Forms\Components\XotBaseTextInput;
use Webmozart\Assert\Assert;

class IconPicker extends XotBaseTextInput
>>>>>>> .merge_file_3Qh3hN
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
        $packs = $packsCombined ?: [];

        $this->suffixAction(
            Action::make('icon')
                ->icon(static fn (?string $state) => $state)
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
                            $optsValues = array_map(
<<<<<<< .merge_file_dSsC7Z
<<<<<<< HEAD
                                static fn ($v) => SafeStringCastAction::cast($v),
=======
<<<<<<< HEAD
                                static fn (mixed $v): string => SafeStringCastAction::cast($v),
=======
<<<<<<< HEAD
                                static fn ($v) => SafeStringCastAction::cast($v),
=======
                                static fn (mixed $v): string => SafeStringCastAction::cast($v),
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                                SafeStringCastAction::cast(...),
>>>>>>> .merge_file_3Qh3hN
                                array_values($optsRaw),
                            );
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(
<<<<<<< .merge_file_dSsC7Z
<<<<<<< HEAD
                                static fn ($k) => SafeStringCastAction::cast($k),
=======
<<<<<<< HEAD
                                static fn (int|string $k): string => SafeStringCastAction::cast($k),
=======
<<<<<<< HEAD
                                static fn ($k) => SafeStringCastAction::cast($k),
=======
                                static fn (int|string $k): string => SafeStringCastAction::cast($k),
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                                static fn (int|string $k): string => SafeStringCastAction::cast($k),
>>>>>>> .merge_file_3Qh3hN
                                array_keys($optsRaw),
                            );
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
