<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Tables\Columns\XotBaseSelectColumn;

class SelectStateColumn extends XotBaseSelectColumn
{
    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
       $this->options(function (Model $record, mixed $state): array {
=======
        $this->options(function (Model $record, mixed $state): array {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
               if (\is_object($state) && method_exists($state, 'transitionableStates')) {
=======
                if (\is_object($state) && method_exists($state, 'transitionableStates')) {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
           if (\is_object($state)) {
=======
            if (\is_object($state)) {
>>>>>>> laraxot/dev
                $stateClass = $state::class;
                if (class_exists($stateClass)) {
                    $stateNameProperty = null;
                    try {
                        $reflection = new \ReflectionClass($stateClass);
                        if ($reflection->hasProperty('name')) {
                            $nameProperty = $reflection->getStaticPropertyValue('name');
<<<<<<< HEAD
                           $stateNameProperty = \is_string($nameProperty) ? $nameProperty : null;
=======
                            $stateNameProperty = \is_string($nameProperty) ? $nameProperty : null;
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
           $statesFiltered = array_filter($states, static function (mixed $item): bool {
=======
            $statesFiltered = array_filter($states, static function (mixed $item): bool {
>>>>>>> laraxot/dev
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
     * @return array<int|string, string>
     */
    private function combineStateOptions(array $states): array
    {
        $statesKeys = array_map(
            static fn (mixed $key): string => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn (mixed $value): string => SafeStringCastAction::cast($value),
            array_values($states),
        );
        $combined = array_combine($statesKeys, $statesValues);

        return $combined ? $combined : [];
    }
}
