<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract as XotStateContract;
use Modules\Xot\Filament\Tables\Columns\XotBaseIconColumn;

class IconStateColumn extends XotBaseIconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it

<<<<<<< HEAD
       $this->icon(static function (XotStateContract $state) {
=======
        $this->icon(static function (XotStateContract $state) {
>>>>>>> laraxot/dev
            return $state->icon();
        });

        $this->color(static function (XotStateContract $state) {
            return $state->color();
        });

        $this->tooltip(static function (XotStateContract $state) {
            return $state->label();
        });
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
<<<<<<< HEAD
                       ->options(function (Model $record, string $_state): array {
=======
                        ->options(function (Model $record, string $_state): array {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
                           if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
=======
                            if (! is_object($state) || ! method_exists($state, 'transitionableStates')) {
>>>>>>> laraxot/dev
                                return [];
                            }

                            try {
                                /** @var array<int|string, mixed> $statesArray */
                                $statesArray = $state->transitionableStates();
                            } catch (\Exception $e) {
<<<<<<< HEAD
                               if (! method_exists($record, 'getStatesFor')) {
=======
                                if (! method_exists($record, 'getStatesFor')) {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
                               $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');
=======
                                $label = __('pub_theme::'.$model.'_states.'.$stateItem.'.label');
>>>>>>> laraxot/dev

                                return [$stateItem => $label];
                            });
                        })
                        ->required()
                        ->reactive(),
                    Textarea::make('message')->required(function (Get $get, Model $record): bool {
                        $newState = $get('state');
                        $name = $this->getName();
                        $state = $record->getAttribute($name);
<<<<<<< HEAD
                       if (! is_object($state) || ! method_exists($state, 'getStateMapping')) {
=======
                        if (! is_object($state) || ! method_exists($state, 'getStateMapping')) {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
                   $name = $this->getName();
=======
                    $name = $this->getName();
>>>>>>> laraxot/dev
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
               ->action(function (mixed $record, array $data): void {
=======
                ->action(function (mixed $record, array $data): void {
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
=======
                    $currentState = $record->getAttribute($this->getName());
>>>>>>> laraxot/dev
                    if (! is_object($currentState) || ! method_exists($currentState, 'transitionTo')) {
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
