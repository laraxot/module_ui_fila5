<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Forms\Components\XotBaseSelect;

class SelectState extends XotBaseSelect
{
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
<<<<<<< HEAD
        $this->options(fn (?Model $record): array => $this->resolveStateOptions($record));
=======
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if ($record === null) {
=======
<<<<<<< .merge_file_KAanOM
<<<<<<< HEAD
        $this->options(fn (?Model $record): array => $this->resolveStateOptions($record));
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $this->options(fn (?Model $record): array => $this->resolveStateOptions($record));
=======
>>>>>>> laraxot/dev
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if ($record === null) {
=======
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if (null === $record) {
>>>>>>> .merge_file_QR1iE8
>>>>>>> .merge_file_r17BgJ
=======
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if (null === $record) {
>>>>>>> laraxot/dev
                $model = $this->getModel();
                if (\is_string($model) && class_exists($model)) {
                    $instance = app($model);
                    if (\is_object($instance)) {
                        $methodExists = method_exists($instance, 'getDefaultStateFor');
                        if ($methodExists) {
                            $statesRaw = $instance->getDefaultStateFor($name);
                            if (! \is_array($statesRaw)) {
                                $statesRaw = Arr::wrap($statesRaw);
                            }
<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
=======
<<<<<<< .merge_file_KAanOM
>>>>>>> .merge_file_r17BgJ
=======
>>>>>>> laraxot/dev

                            /* @var array<int|string, mixed> $statesRaw */
                            return $this->combineStateOptions($statesRaw);
                        }
                    }
                }

                return [];
            }

            if (! method_exists($record, 'getStatesFor')) {
                return [];
            }

            $statesCollection = $record->getStatesFor($name);
            $statesRaw = \is_object($statesCollection) && method_exists($statesCollection, 'toArray')
                ? $statesCollection->toArray()
                : [];
            /** @var array<int|string, mixed> $states */
            $states = $statesRaw;

            return $this->combineStateOptions($states);
        });
<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r17BgJ
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        $this->required();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
=======
=======
<<<<<<< HEAD
     * @param  array<int|string, mixed>  $states
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r17BgJ
     * @return array<int|string, string>
     */
    private function resolveStateOptions(?Model $record): array
    {
        if (null === $record) {
            return $this->resolveDefaultStateOptions();
        }
=======

                            /* @var array<int|string, mixed> $statesRaw */
                            return $this->combineStateOptions($statesRaw);
                        }
                    }
                }
>>>>>>> .merge_file_QR1iE8

                return [];
            }

            if (! method_exists($record, 'getStatesFor')) {
                return [];
            }

            $statesCollection = $record->getStatesFor($name);
            $statesRaw = \is_object($statesCollection) && method_exists($statesCollection, 'toArray')
                ? $statesCollection->toArray()
                : [];
            /** @var array<int|string, mixed> $states */
            $states = $statesRaw;

<<<<<<< .merge_file_KAanOM
    /**
     * @return array<int|string, string>
     */
    private function resolveDefaultStateOptions(): array
    {
        $name = $this->getName();
        $model = $this->getModel();
        if (! \is_string($model) || ! class_exists($model)) {
            return [];
        }

        $instance = app($model);
        if (! \is_object($instance) || ! method_exists($instance, 'getDefaultStateFor')) {
            return [];
        }

        $statesRaw = $instance->getDefaultStateFor($name);
        if (! \is_array($statesRaw)) {
            $statesRaw = Arr::wrap($statesRaw);
        }

<<<<<<< HEAD
        /** @var array<int|string, mixed> $statesRaw */
=======
        /* @var array<int|string, mixed> $statesRaw */
>>>>>>> laraxot/dev
        return $this->combineStateOptions($statesRaw);
=======
            return $this->combineStateOptions($states);
        });
        $this->required();
>>>>>>> .merge_file_QR1iE8
    }

    /**
     * @param array<int|string, mixed> $states
     *
<<<<<<< .merge_file_eff3XQ
=======
     * @param  array<int|string, mixed>  $states
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
     * @param  array<int|string, mixed>  $states
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r17BgJ
=======
     * @param array<int|string, mixed> $states
     *
>>>>>>> laraxot/dev
     * @return array<int|string, string>
     */
    private function combineStateOptions(array $states): array
    {
        $statesKeys = array_map(
<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KAanOM
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r17BgJ
=======
>>>>>>> laraxot/dev
            static fn ($key) => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn ($value) => SafeStringCastAction::cast($value),
<<<<<<< HEAD
<<<<<<< .merge_file_eff3XQ
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r17BgJ
            static fn (int|string $key): string => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn (mixed $value): string => SafeStringCastAction::cast($value),
<<<<<<< .merge_file_eff3XQ
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            static fn (int|string $key): string => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            SafeStringCastAction::cast(...),
>>>>>>> .merge_file_QR1iE8
>>>>>>> .merge_file_r17BgJ
=======
>>>>>>> laraxot/dev
            array_values($states),
        );
        $combined = array_combine($statesKeys, $statesValues);

        return $combined ? $combined : [];
    }
}
