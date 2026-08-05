<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract as XotStateContract;
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
<<<<<<< HEAD
=======
=======
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Contracts\StateContract as XotStateContract;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class IconStateColumn extends IconColumn
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it

<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
        $this->icon(function (XotStateContract $state) {
            return $state->icon();
        });

        $this->color(function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(function (XotStateContract $state) {
>>>>>>> 6e44b7d5 (.)
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
>>>>>>> laraxot/dev
                        ->options(function (Model $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if (null === $state) {
                                if (! method_exists($record, 'getDefaultStateFor')) {
                                    return [];
                                }
<<<<<<< HEAD
=======
=======
                        ->options(function (Model&HasStatesContract $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
                            if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
=======
<<<<<<< HEAD
                            if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
=======
                            if (! $state instanceof State) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                                return [];
                            }

                            try {
                                /** @var array<int|string, mixed> $statesArray */
                                $statesArray = $state->transitionableStates();
                            } catch (\Exception $e) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
=======
                                /** @var array<int|string, mixed> $statesArray */
                                $statesArray = $record->getStatesFor($name)->toArray();
                            }

                            /* @var array<int|string, mixed> $states */
                            return Arr::mapWithKeys($statesArray, function ($state) use ($record) {
                                if (! is_string($state)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                                    return [];
                                }
                                $model = Str::of(class_basename($record))->slug()->toString();
                                /** @var string $label */
<<<<<<< HEAD
                                $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');

                                return [$stateItem => $label];
=======
<<<<<<< HEAD
                                $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');

                                return [$stateItem => $label];
=======
                                $label = __('pub_theme::'.$model.'_states.'.$state.'.label');

                                return [$state => $label];
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                            });
                        })
                        ->required()
                        ->reactive(),
                    Textarea::make('message')->required(function (Get $get, Model $record): bool {
                        $newState = $get('state');
                        $name = $this->getName();
                        $state = $record->getAttribute($name);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
=======
                        if (! $state instanceof State) {
                            return false;
                        }

                        /** @var Collection<string, class-string<State>> $states */
                        $states = $state::getStateMapping();
                        /** @var array<string, class-string<State>> $statesArray */
                        $statesArray = $states->toArray();

                        /** @var class-string<State>|null $newStateClass */
                        $newStateClass = Arr::get($statesArray, (string) $newState);
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
                    $name = $this->getName();
                    $state = $record->getAttribute($name);
                    if (! is_object($state)) {
=======
<<<<<<< HEAD
                    $name = $this->getName();
                    $state = $record->getAttribute($name);
                    if (! is_object($state)) {
=======
                    /** @var Model&HasStatesContract $record */
                    $name = $this->getName();
                    $state = $record->getAttribute($name);
                    if (! ($state instanceof State)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
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
                ->action(function ($record, $data): void {
=======
<<<<<<< HEAD
                ->action(function ($record, $data): void {
=======
                ->action(function ($record, $data) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                    /** @var array<string, mixed> $data */
                    if (! isset($data['state']) || ! is_string($data['state'])) {
                        throw new \Exception('State is required and must be a string');
                    }
                    $state = $data['state'];
                    /** @var Model $record */
                    if (! is_object($record)) {
                        throw new \Exception('Record must be an object');
                    }
                    $model = Str::of(class_basename($record))->slug()->toString();
                    /** @var string $label */
                    $label = __('pub_theme::'.$model.'_states.'.$state.'.label');

<<<<<<< HEAD
                    $currentState = $record->getAttribute($this->getName());
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
=======
<<<<<<< HEAD
                    $currentState = $record->getAttribute($this->getName());
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
=======
                    /** @var Model&HasStatesContract $record */
                    $currentState = $record->getAttribute($this->getName());
                    if (! ($currentState instanceof State)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                        throw new \Exception('Current state is not a valid State instance');
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
}
