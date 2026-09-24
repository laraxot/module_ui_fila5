<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract as XotStateContract;
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
=======
<<<<<<< HEAD

class IconStateColumn extends IconColumn
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it

<<<<<<< HEAD
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
>>>>>>> laraxot/dev
        $this->icon(static function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(static function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(static function (XotStateContract $state) {
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            return $state->label();
        });
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
<<<<<<< HEAD
=======
<<<<<<< HEAD
                        ->options(fn (Model $record, string $_state): array => $this->resolveTransitionableStateOptions($record))
=======
>>>>>>> laraxot/dev
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
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
                            } catch (Exception $e) {
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

                            return Arr::mapWithKeys($statesArray, static function (mixed $stateItem) use ($record): array {
                                if (! is_string($stateItem)) {
                                    return [];
                                }
                                $model = Str::of(class_basename($record))->slug()->toString();
                                /** @var string $label */
                                $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');

                                return [$stateItem => $label];
                            });
                        })
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
                ->action(function ($record, $data): void {
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new \Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
                    /** @var Model $record */
                    if (! is_object($record)) {
                        throw new \Exception('Record must be an object');
                    }
=======
>>>>>>> laraxot/dev
                ->action(function (Model $record, array $data): void {
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
                    $model = Str::of(class_basename($record))->slug()->toString();
                    /** @var string $label */
                    $label = __('pub_theme::'.$model.'_states.'.$state.'.label');

                    $currentState = $record->getAttribute($this->getName());
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
<<<<<<< HEAD
                        throw new Exception('Current state is not a valid State instance');
=======
<<<<<<< HEAD
                        throw new \Exception('Current state is not a valid State instance');
=======
                        throw new Exception('Current state is not a valid State instance');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
<<<<<<< HEAD

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

        if ([] === $statesArray) {
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
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
}
