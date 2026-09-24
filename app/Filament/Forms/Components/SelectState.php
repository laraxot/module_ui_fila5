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
=======
<<<<<<< HEAD
        $this->options(fn (?Model $record): array => $this->resolveStateOptions($record));
=======
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if ($record === null) {
>>>>>>> 804451c (Lint)
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
<<<<<<< .merge_file_KAanOM
=======
>>>>>>> 804451c (Lint)

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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
        $this->required();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @param  array<int|string, mixed>  $states
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
     * @return array<int|string, string>
     */
    private function resolveStateOptions(?Model $record): array
    {
        if (null === $record) {
            return $this->resolveDefaultStateOptions();
        }
<<<<<<< HEAD
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
=======

        if (! method_exists($record, 'getStatesFor')) {
            return [];
        }

        $statesCollection = $record->getStatesFor($this->getName());
        $statesRaw = \is_object($statesCollection) && method_exists($statesCollection, 'toArray')
            ? $statesCollection->toArray()
            : [];
        /** @var array<int|string, mixed> $states */
        $states = $statesRaw;

        return $this->combineStateOptions($states);
    }

>>>>>>> 804451c (Lint)
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
=======
        /* @var array<int|string, mixed> $statesRaw */
        return $this->combineStateOptions($statesRaw);
>>>>>>> 804451c (Lint)
    }

    /**
     * @param array<int|string, mixed> $states
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
     * @param  array<int|string, mixed>  $states
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
     * @param  array<int|string, mixed>  $states
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
     * @return array<int|string, string>
     */
    private function combineStateOptions(array $states): array
    {
        $statesKeys = array_map(
<<<<<<< HEAD
<<<<<<< .merge_file_KAanOM
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
            static fn ($key) => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn ($value) => SafeStringCastAction::cast($value),
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
            static fn (int|string $key): string => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn (mixed $value): string => SafeStringCastAction::cast($value),
<<<<<<< HEAD
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
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
            array_values($states),
        );
        $combined = array_combine($statesKeys, $statesValues);

        return $combined ? $combined : [];
    }
}
