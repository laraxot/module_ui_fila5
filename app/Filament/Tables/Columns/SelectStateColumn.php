<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Actions\Cast\SafeStringCastAction;

class SelectStateColumn extends SelectColumn
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Tables\Columns\XotBaseSelectColumn;
use ReflectionClass;

class SelectStateColumn extends XotBaseSelectColumn
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
{
    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $this->options(fn (Model $record, mixed $state): array => $this->resolveColumnStateOptions($record, $state));

        $this->beforeStateUpdated(function (Model $record, mixed $stateRaw): void {
            $this->applyStateTransition($record, $stateRaw);
        });
    }

    private function applyStateTransition(Model $record, mixed $stateRaw): void
    {
        if (! \is_string($stateRaw)) {
            return;
        }

        $state = $stateRaw;
        $message = '';

        $recordState = $record->getAttribute('state');
        if (! \is_object($recordState)) {
            return;
        }

        if (! method_exists($recordState, 'transitionTo')) {
            return;
        }

        $recordState->transitionTo($state, $message);
    }

    /**
     * @return array<int|string, string>
     */
    private function resolveColumnStateOptions(Model $record, mixed $state): array
    {
        $name = $this->getName();
        if (null === $state) {
            return $this->resolveDefaultColumnStates($record, $name);
        }

        /** @var array<int|string, mixed> $states */
        $states = $this->resolveTransitionableStates($record, $state, $name);
        $states = $this->prependCurrentStateName($state, $states);

        $statesFiltered = array_filter($states, static function (mixed $item): bool {
            return \is_string($item) || \is_int($item);
        });

<<<<<<< HEAD
        /** @var array<int|string, mixed> $statesFiltered */
=======
        /* @var array<int|string, mixed> $statesFiltered */
>>>>>>> laraxot/dev
        return $this->combineStateOptions($statesFiltered);
    }

    /**
     * @return array<int|string, string>
     */
    private function resolveDefaultColumnStates(Model $record, string $name): array
    {
        if (! method_exists($record, 'getDefaultStateFor')) {
            return [];
        }

        $defaultStates = $record->getDefaultStateFor($name);
        $states = Arr::wrap($defaultStates);
        /** @var array<int|string, mixed> $states */
        $states = \is_array($states) ? $states : [];

        return $this->combineStateOptions($states);
    }

    /**
     * @return array<int|string, mixed>
     */
    private function resolveTransitionableStates(Model $record, mixed $state, string $name): array
    {
        if (! \is_object($state) || ! method_exists($state, 'transitionableStates')) {
            return $this->fetchFallbackStates($record, $name);
        }

        try {
            $transitionableStates = $state->transitionableStates();
            if (! is_iterable($transitionableStates)) {
                return [];
            }

            return \is_array($transitionableStates) ? $transitionableStates : iterator_to_array($transitionableStates);
        } catch (\Exception) {
            return $this->fetchFallbackStates($record, $name);
        }
    }

    /**
     * @return array<int|string, mixed>
     */
    private function fetchFallbackStates(Model $record, string $name): array
    {
        if (! method_exists($record, 'getStatesFor')) {
            return [];
        }

        $fetchedStates = $record->getStatesFor($name);
        if (! \is_object($fetchedStates) || ! method_exists($fetchedStates, 'toArray')) {
            return [];
        }

        $statesArray = $fetchedStates->toArray();

        return \is_array($statesArray) ? $statesArray : [];
    }

    /**
<<<<<<< HEAD
     * @param  array<int|string, mixed>  $states
=======
     * @param array<int|string, mixed> $states
     *
>>>>>>> laraxot/dev
     * @return array<int|string, mixed>
     */
    private function prependCurrentStateName(mixed $state, array $states): array
    {
        if (! \is_object($state)) {
            return $states;
        }

        $stateNameProperty = $this->resolveStaticStateName($state::class);
        if (null === $stateNameProperty) {
            return $states;
        }

        $statesValues = array_values($states);
        /** @var list<int|string> $statesValuesTyped */
        $statesValuesTyped = $statesValues;

        return [$stateNameProperty, ...$statesValuesTyped];
    }

    private function resolveStaticStateName(string $stateClass): ?string
    {
        if (! class_exists($stateClass)) {
            return null;
        }

        try {
            $reflection = new \ReflectionClass($stateClass);
            if (! $reflection->hasProperty('name')) {
                return null;
            }

            $nameProperty = $reflection->getStaticPropertyValue('name');

            return \is_string($nameProperty) ? $nameProperty : null;
        } catch (\ReflectionException) {
            return null;
        }
    }

    /**
     * @param array<int|string, mixed> $states
     *
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        $this->options(function (Model $record, mixed $state): array {
            $name = $this->getName();
            if ($state === null) {
                if (! method_exists($record, 'getDefaultStateFor')) {
                    return [];
                }
                $defaultStates = $record->getDefaultStateFor($name);
                $states = Arr::wrap($defaultStates);
                /** @var array<int|string, mixed> $states */
                $states = \is_array($states) ? $states : [];

                return $this->combineStateOptions($states);
            }

            $states = [];
            try {
                if (\is_object($state) && method_exists($state, 'transitionableStates')) {
                    $transitionableStates = $state->transitionableStates();
                    if (is_iterable($transitionableStates)) {
                        $states = \is_array($transitionableStates) ? $transitionableStates : iterator_to_array($transitionableStates);
                    }
                }
            } catch (\Exception) {
                if (! method_exists($record, 'getStatesFor')) {
                    return [];
                }
                $fetchedStates = $record->getStatesFor($name);
                $statesArray = \is_object($fetchedStates) && method_exists($fetchedStates, 'toArray')
                    ? $fetchedStates->toArray()
                    : [];
                $states = $statesArray;
            }

            /** @var array<int|string, mixed> $states */
            if (\is_object($state)) {
                $stateClass = $state::class;
                if (class_exists($stateClass)) {
                    $stateNameProperty = null;
                    try {
                        $reflection = new ReflectionClass($stateClass);
                        if ($reflection->hasProperty('name')) {
                            $nameProperty = $reflection->getStaticPropertyValue('name');
                            $stateNameProperty = \is_string($nameProperty) ? $nameProperty : null;
                        }
                    } catch (\ReflectionException) {
                        // Intentionally ignored: fall back to $stateNameProperty === null below.
                    }
                    if ($stateNameProperty !== null) {
                        $statesValues = array_values($states);
                        /** @var list<int|string> $statesValuesTyped */
                        $statesValuesTyped = $statesValues;
                        $states = [$stateNameProperty, ...$statesValuesTyped];
                    }
                }
            }

            /** @var array<int|string, mixed> $states */
            $statesFiltered = array_filter($states, static function (mixed $item): bool {
                return \is_string($item) || \is_int($item);
            });

            return $this->combineStateOptions($statesFiltered);
        });

        $this->beforeStateUpdated(static function (Model $record, mixed $stateRaw): void {
            if (! \is_string($stateRaw)) {
                return;
            }

            $state = $stateRaw;
            $message = '';

            $recordState = $record->getAttribute('state');
            if (! \is_object($recordState)) {
                return;
            }

            if (! method_exists($recordState, 'transitionTo')) {
                return;
            }

            $recordState->transitionTo($state, $message);
        });
    }

    /**
     * @param  array<int|string, mixed>  $states
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
     * @return array<int|string, string>
     */
    private function combineStateOptions(array $states): array
    {
        $statesKeys = array_map(
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            static fn ($key) => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn ($value) => SafeStringCastAction::cast($value),
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
            static fn (int|string $key): string => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn (mixed $value): string => SafeStringCastAction::cast($value),
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            array_values($states),
        );
        $combined = array_combine($statesKeys, $statesValues);

        return $combined ? $combined : [];
    }
}
