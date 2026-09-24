<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Exception;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_it08ua
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 804451c (Lint)
=======
use Filament\Tables\Columns\IconColumn;
>>>>>>> .merge_file_it08ua
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract as XotStateContract;
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD

class IconStateColumn extends IconColumn
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD

class IconStateColumn extends IconColumn
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 804451c (Lint)
=======

class IconStateColumn extends IconColumn
>>>>>>> .merge_file_it08ua
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it

<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_it08ua
        $this->icon(function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(function (XotStateContract $state) {
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
        $this->icon(function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(function (XotStateContract $state) {
=======
>>>>>>> 804451c (Lint)
        $this->icon(static function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(static function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(static function (XotStateContract $state) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $this->tooltip(static function (XotStateContract $state) {
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
            return $state->label();
        });
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
                        ->options(fn (Model $record, string $_state): array => $this->resolveTransitionableStateOptions($record))
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                        ->options(fn (Model $record, string $_state): array => $this->resolveTransitionableStateOptions($record))
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
                        ->options(fn (Model $record, string $_state): array => $this->resolveTransitionableStateOptions($record))
=======
>>>>>>> 804451c (Lint)
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_it08ua
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if (null === $state) {
<<<<<<< .merge_file_eG4D1N
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
                                if (! method_exists($record, 'getDefaultStateFor')) {
                                    return [];
                                }
                                $defaultStates = Arr::wrap($record->getDefaultStateFor($name));

                                /** @var array<string, string> $options */
                                $options = [];
                                foreach ($defaultStates as $defaultState) {
                                    if (! is_string($defaultState)) {
                                        continue;
                                    }

                                    $options[$defaultState] = $defaultState;
                                }

                                return $options;
                            }
                            if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
                                return [];
                            }

                            try {
                                /** @var array<int|string, mixed> $statesArray */
                                $statesArray = $state->transitionableStates();
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
                            } catch (Exception $e) {
=======
                            } catch (\Exception $e) {
>>>>>>> .merge_file_TiXTrx
=======
                            } catch (Exception $e) {
>>>>>>> 804451c (Lint)
=======
                            } catch (\Exception $e) {
>>>>>>> .merge_file_it08ua
                                if (! method_exists($record, 'getStatesFor')) {
                                    return [];
                                }
                                $fetchedStates = $record->getStatesFor($name);
                                $statesArray = \is_object($fetchedStates) && method_exists($fetchedStates, 'toArray')
                                    ? $fetchedStates->toArray()
                                    : [];
                            }

                            if (! is_array($statesArray)) {
                                return [];
                            }

                            return Arr::mapWithKeys($statesArray, function (mixed $stateItem) use ($record): array {
                                if (! is_string($stateItem)) {
                                    return [];
                                }
                                $model = Str::of(class_basename($record))->slug()->toString();
                                /** @var string $label */
                                $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');

                                return [$stateItem => $label];
                            });
                        })
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
                        ->required()
                        ->reactive(),
                    Textarea::make('message')->required(function (Get $get, Model $record): bool {
                        $newState = $get('state');
                        $name = $this->getName();
                        $state = $record->getAttribute($name);
                        if (! is_object($state) || ! method_exists($state, 'getStateMapping')) {
                            return false;
                        }

                        $states = $state::getStateMapping();
                        $statesArray = \is_object($states) && method_exists($states, 'toArray')
                            ? $states->toArray()
                            : [];
                        if (! is_array($statesArray)) {
                            return false;
                        }

                        $newStateClass = Arr::get($statesArray, SafeStringCastAction::cast($newState));
                        if (! is_string($newStateClass) || ! class_exists($newStateClass)) {
                            return false;
                        }

                        $newStateInstance = new $newStateClass($record);

                        return method_exists($newStateInstance, 'isMessageRequired')
                            ? (bool) $newStateInstance->isMessageRequired()
                            : false;
                    }),
                ])
                ->fillForm(function (Model $record): array {
                    $name = $this->getName();
                    $state = $record->getAttribute($name);
                    if (! is_object($state)) {
                        return [];
                    }
                    /** @var string $stateName */
                    // ✅ isset() invece di property_exists() - più sicuro e coerente
                    $stateName = isset($state->name) && is_string($state->name)
                        ? $state->name
                        : class_basename($state);

                    return [
                        'state' => $stateName,
                    ];
                })
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
                ->action(function ($record, $data): void {
=======
                ->action(function (Model $record, array $data): void {
>>>>>>> .merge_file_TiXTrx
=======
<<<<<<< HEAD
                ->action(function ($record, $data): void {
>>>>>>> 804451c (Lint)
=======
                ->action(function ($record, $data): void {
>>>>>>> .merge_file_it08ua
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new \Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
                    /** @var Model $record */
                    if (! is_object($record)) {
                        throw new \Exception('Record must be an object');
                    }
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
                ->action(function (Model $record, array $data): void {
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
                    $model = Str::of(class_basename($record))->slug()->toString();
                    /** @var string $label */
                    $label = __('pub_theme::'.$model.'_states.'.$state.'.label');

                    $currentState = $record->getAttribute($this->getName());
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
                        throw new \Exception('Current state is not a valid State instance');
<<<<<<< .merge_file_eG4D1N
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        throw new Exception('Current state is not a valid State instance');
=======
<<<<<<< HEAD
                        throw new \Exception('Current state is not a valid State instance');
=======
                        throw new Exception('Current state is not a valid State instance');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                        throw new Exception('Current state is not a valid State instance');
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_it08ua
                    }

                    /** @var string|null $message */
                    $message = isset($data['message']) && is_string($data['message']) ? $data['message'] : null;
                    $currentState->transitionTo($state, $message);

                    Notification::make()
                        ->title('Stato aggiornato a '.$label)
                        ->success()
                        ->send();
                }),
        );
    }
<<<<<<< .merge_file_eG4D1N
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)

    /**
     * @return array<string, string>
     */
    private function resolveTransitionableStateOptions(Model $record): array
    {
        $name = $this->getName();
        $state = $record->getAttribute($name);
        if (null === $state) {
            return $this->resolveDefaultStateOptions($record, $name);
        }

        if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
            return [];
        }

        try {
            $transitionResult = $state->transitionableStates();
            $statesArray = is_array($transitionResult) ? $transitionResult : [];
        } catch (\Exception) {
            if (! method_exists($record, 'getStatesFor')) {
                return [];
            }

            $fetchedStates = $record->getStatesFor($name);
            if (! \is_object($fetchedStates) || ! method_exists($fetchedStates, 'toArray')) {
                return [];
            }

            $fallback = $fetchedStates->toArray();
            $statesArray = \is_array($fallback) ? $fallback : [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($statesArray === []) {
=======
        if ([] === $statesArray) {
>>>>>>> laraxot/dev
=======
        if ([] === $statesArray) {
>>>>>>> 804451c (Lint)
            return [];
        }

        $model = Str::of(class_basename($record))->slug()->toString();
        $options = [];

        foreach ($statesArray as $stateItem) {
            if (! is_string($stateItem)) {
                continue;
            }

            /** @var string $label */
            $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');
            $options[$stateItem] = $label;
        }

        return $options;
    }

    /**
     * @return array<string, string>
     */
    private function resolveDefaultStateOptions(Model $record, string $name): array
    {
        if (! method_exists($record, 'getDefaultStateFor')) {
            return [];
        }

        $defaultStates = Arr::wrap($record->getDefaultStateFor($name));
        $options = [];
        foreach ($defaultStates as $defaultState) {
            if (! is_string($defaultState)) {
                continue;
            }

            $options[$defaultState] = $defaultState;
        }

        return $options;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_it08ua
}
