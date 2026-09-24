<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Tables\Columns\IconColumn;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
use Filament\Tables\Columns\IconColumn;
>>>>>>> 0dadab4 (Lint)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract as XotStateContract;
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD

class IconStateColumn extends IconColumn
=======
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
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
>>>>>>> .merge_file_TiXTrx
=======

class IconStateColumn extends IconColumn
>>>>>>> 0dadab4 (Lint)
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it

<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $this->icon(function (XotStateContract $state) {
=======
        $this->icon(static function (XotStateContract $state) {
>>>>>>> .merge_file_TiXTrx
            return $state->icon();
        });

        $this->color(static function (XotStateContract $state) {
            return $state->color();
        });

<<<<<<< .merge_file_tjAhRw
        $this->tooltip(function (XotStateContract $state) {
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/dev
=======
        $this->tooltip(static function (XotStateContract $state) {
>>>>>>> .merge_file_TiXTrx
=======
        $this->icon(function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(function (XotStateContract $state) {
>>>>>>> 0dadab4 (Lint)
            return $state->label();
        });
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
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
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
=======
=======
>>>>>>> 0dadab4 (Lint)
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if (null === $state) {
<<<<<<< HEAD
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
                            } catch (Exception $e) {
=======
                            } catch (\Exception $e) {
>>>>>>> .merge_file_TiXTrx
=======
                            } catch (\Exception $e) {
>>>>>>> 0dadab4 (Lint)
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

<<<<<<< HEAD
                            return Arr::mapWithKeys($statesArray, static function (mixed $stateItem) use ($record): array {
=======
                            return Arr::mapWithKeys($statesArray, function (mixed $stateItem) use ($record): array {
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 0dadab4 (Lint)
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
                ->action(function ($record, $data): void {
>>>>>>> 0dadab4 (Lint)
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new \Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
<<<<<<< HEAD
<<<<<<< .merge_file_tjAhRw
=======
>>>>>>> 0dadab4 (Lint)
                    /** @var Model $record */
                    if (! is_object($record)) {
                        throw new \Exception('Record must be an object');
                    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 0dadab4 (Lint)
                    $model = Str::of(class_basename($record))->slug()->toString();
                    /** @var string $label */
                    $label = __('pub_theme::'.$model.'_states.'.$state.'.label');

                    $currentState = $record->getAttribute($this->getName());
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
<<<<<<< HEAD
<<<<<<< HEAD
                        throw new \Exception('Current state is not a valid State instance');
=======
<<<<<<< HEAD
                        throw new Exception('Current state is not a valid State instance');
=======
<<<<<<< HEAD
                        throw new \Exception('Current state is not a valid State instance');
=======
                        throw new Exception('Current state is not a valid State instance');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                        throw new \Exception('Current state is not a valid State instance');
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< .merge_file_tjAhRw
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev

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
        if ($statesArray === []) {
=======
        if ([] === $statesArray) {
>>>>>>> laraxot/dev
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
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_TiXTrx
=======
>>>>>>> 0dadab4 (Lint)
}
