<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeStringCastAction;
=======
>>>>>>> c001364 (.)
use Modules\Xot\Filament\Forms\Components\XotBaseSelect;

class SelectState extends XotBaseSelect
{
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
=======
        //  $this->selectablePlaceholder(false);
>>>>>>> c001364 (.)
        $this->options(function (?Model $record): array {
            $name = $this->getName();
            if (null === $record) {
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
>>>>>>> c001364 (.)
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
<<<<<<< HEAD

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
=======
            $statesKeys = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(static fn ($v) => \is_string($v) ? $v : (string) $v, array_values($states));

            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ? $combined : [];

            return $combinedTyped;
        });
        $this->required();
    }
>>>>>>> c001364 (.)
}
