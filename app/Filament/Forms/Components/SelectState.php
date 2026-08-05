<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Forms\Components\XotBaseSelect;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Forms\Components\XotBaseSelect;
=======
use Modules\Xot\Filament\Forms\Components\XotBaseSelect;
use Spatie\ModelStates\HasStatesContract;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev

class SelectState extends XotBaseSelect
{
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if (null === $record) {
=======
<<<<<<< HEAD
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if (null === $record) {
=======
        //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name = $this->getName();
            if ($record === null) {
>>>>>>> 6e44b7d5 (.)
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

                            /* @var array<int|string, mixed> $statesRaw */
                            return $this->combineStateOptions($statesRaw);
=======
<<<<<<< HEAD

                            /* @var array<int|string, mixed> $statesRaw */
                            return $this->combineStateOptions($statesRaw);
=======
                            /** @var array<int|string, mixed> $statesRaw */
                            $states = $statesRaw;
                            $statesKeys = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));

                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ? $combined : [];
                            $statesKeys = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));

                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ? $combined : [];

                            return $combinedTyped;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                        }
                    }
                }

                return [];
            }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
        $this->required();
    }

    /**
     * @param array<int|string, mixed> $states
     *
     * @return array<int|string, string>
     */
    private function combineStateOptions(array $states): array
    {
        $statesKeys = array_map(
            static fn ($key) => SafeStringCastAction::cast($key),
            array_keys($states),
        );
        $statesValues = array_map(
            static fn ($value) => SafeStringCastAction::cast($value),
            array_values($states),
        );
        $combined = array_combine($statesKeys, $statesValues);

        return $combined ? $combined : [];
    }
<<<<<<< HEAD
=======
=======
            // Record implements HasStatesContract which provides getStatesFor()
            $statesCollection = $record->getStatesFor($name);
            // getStatesFor() returns Collection which has toArray()
            $statesRaw = $statesCollection->toArray();
            /** @var array<int|string, mixed> $states */
            $states = $statesRaw;
            $statesKeys = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));

            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ? $combined : [];

            return $combinedTyped;
        });
        $this->required();
    }
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
}
