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
       $this->options(function (?Model $record): array {
=======
        $this->options(function (?Model $record): array {
>>>>>>> laraxot/dev
            $name = $this->getName();
            if ($record === null) {
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
=======

>>>>>>> laraxot/dev
                            /* @var array<int|string, mixed> $statesRaw */
                            return $this->combineStateOptions($statesRaw);
                        }
                    }
                }

                return [];
            }

<<<<<<< HEAD
           if (! method_exists($record, 'getStatesFor')) {
=======
            if (! method_exists($record, 'getStatesFor')) {
>>>>>>> laraxot/dev
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
