<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Notifications\Notification;
=======
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\Column;
>>>>>>> dfac49d (.)
=======
use Filament\Actions\Action;
use Filament\Notifications\Notification;
>>>>>>> dfbb8305 (.)
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;
=======
>>>>>>> dfac49d (.)
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;
>>>>>>> dfbb8305 (.)

/**
 * IconStateSplitColumn - Enhanced state transition column with compact grid layout.
 *
 * This column displays state transition icons in a compact grid layout with:
 * - Optimized space usage with responsive grid
 * - Enhanced tooltips and visual feedback
 * - Smooth animations and hover effects
 * - Proper error handling and notifications
 * - Mobile-friendly design
 */
<<<<<<< HEAD
<<<<<<< HEAD
final class IconStateSplitColumn extends XotBaseColumn
=======
final class IconStateSplitColumn extends Column
>>>>>>> dfac49d (.)
=======
final class IconStateSplitColumn extends XotBaseColumn
>>>>>>> dfbb8305 (.)
{
    protected string $view = 'ui::filament.tables.columns.icon-state-split';

    protected string $stateClass = '';

    protected string $modelClass = '';

    /**
     * Configure the state class and model class for this column.
     *
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
=======
>>>>>>> dfac49d (.)
=======
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
>>>>>>> dfbb8305 (.)
     */
    public function stateClass(string $stateClass, string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;

        return $this;
    }

    /**
     * @return array<string, array{class: StateContract, icon: string, label: string, color: string, tooltip: string}>
     */
    public function getRecordStates(): array
    {
        $stateMapping = $this->getStateMapping();
        $record = $this->getRecord();
        $result = [];

        foreach ($stateMapping as $stateKey => $stateClassItem) {
            $stateInstance = $this->getStateInstance($stateClassItem, $record);

            if (! $stateInstance) {
                continue;
            }

            $labelString = SafeStringCastAction::cast($stateInstance->label());

            $result[$stateKey] = [
                'class' => $stateInstance,
                'icon' => SafeStringCastAction::cast($stateInstance->icon()),
                'label' => $labelString,
                'color' => SafeStringCastAction::cast($stateInstance->color()),
                'tooltip' => $labelString,
            ];
        }

        return $result;
    }

    public function canTransitionTo(int|string $recordId, string $stateClass): bool
    {
        try {
            $record = $this->getCachedRecord($recordId);

            $recordState = $record?->getAttribute('state');

            return \is_object($recordState) && method_exists($recordState, 'canTransitionTo')
                ? (bool) $recordState->canTransitionTo($stateClass)
                : false;
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Exception) {
=======
        } catch (Exception) {
>>>>>>> dfac49d (.)
=======
        } catch (\Exception) {
>>>>>>> dfbb8305 (.)
            return false;
        }
    }

    /**
     * Metodo per testare le azioni.
     */
    public function prova(int|string $recordId): void
    {
        Notification::make()
            ->title(__('ui::actions.test_action.title'))
            ->body(__('ui::actions.test_action.body', ['id' => $recordId]))
            ->success()
            ->send();
    }

    /**
     * Restituisce le azioni per gli stati.
     *
     * @return array<string, Action>
     */
    public function getStateActions(): array
    {
        $actions = [];
        $actions['prova'] = $this->getProvaAction();

        $states = $this->getRecordStates();
        foreach ($states as $stateKey => $stateData) {
            $transitionAction = $this->getTransitionAction($stateKey, $stateData);

            if ($transitionAction) {
                $actions["transition_to_{$stateKey}"] = $transitionAction;
            }
        }

        return $actions;
    }

    /**
     * Listener per l'evento table-action.
     */
    #[On('table-action')]
    public function handleTableAction(string $action, int|string $recordId): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ('prova' === $action) {
=======
        if ($action === 'prova') {
>>>>>>> dfac49d (.)
=======
        if ('prova' === $action) {
>>>>>>> dfbb8305 (.)
            $this->prova($recordId);
        }
    }

    /**
     * Metodo per eseguire la transizione di stato.
     */
    public function transitionState(int|string $recordId, string $stateClass): void
    {
        try {
            $record = $this->getRecordForTransition($recordId);
            $state = $record->getAttribute('state');
            if (! \is_object($state) || ! method_exists($state, 'transitionTo')) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
                throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> dfac49d (.)
=======
                throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> dfbb8305 (.)
            }
            $state->transitionTo($stateClass);

            $this->notifyTransitionSuccess();
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Exception $e) {
=======
        } catch (Exception $e) {
>>>>>>> dfac49d (.)
=======
        } catch (\Exception $e) {
>>>>>>> dfbb8305 (.)
            $this->notifyTransitionError($e->getMessage());
        }
    }

    /**
     * @return array<string, string>
     */
    private function getStateMapping(): array
    {
        if (! class_exists($this->stateClass) || ! method_exists($this->stateClass, 'getStateMapping')) {
            return [];
        }

        $stateMapping = $this->stateClass::getStateMapping();

        if (\is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
            /** @var array<string, string> $statesArray */
            $statesArray = $stateMapping->toArray();

            return \is_array($statesArray) ? $statesArray : [];
        }

        return [];
    }

    private function getStateInstance(mixed $stateClassItem, mixed $record): ?StateContract
    {
        try {
            if (! \is_string($stateClassItem) || ! class_exists($stateClassItem)) {
                return null;
            }

            $stateInstance = new $stateClassItem($record);
            if (! $stateInstance instanceof StateContract) {
                return null;
            }

            return $stateInstance;
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Exception) {
=======
        } catch (Exception) {
>>>>>>> dfac49d (.)
=======
        } catch (\Exception) {
>>>>>>> dfbb8305 (.)
            return null;
        }
    }

    private function getCachedRecord(int|string $recordId): ?Model
    {
        if (! class_exists($this->modelClass) || ! method_exists($this->modelClass, 'find')) {
            return null;
        }

        $record = $this->modelClass::find($recordId);

        return \is_object($record) && $record instanceof Model ? $record : null;
    }

    private function getProvaAction(): Action
    {
        $record = $this->getRecord();

        return Action::make('prova')
            ->icon('heroicon-m-plus')
            ->color('primary')
            ->action(static function () use ($record): void {
                $recordId = $record && isset($record->id) ? SafeStringCastAction::cast($record->id) : 'N/A';
                Notification::make()
                    ->title(__('ui::actions.prova.title'))
                    ->body(__('ui::actions.prova.body', ['id' => $recordId]))
                    ->success()
                    ->send();
            });
    }

    /**
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
=======
>>>>>>> dfac49d (.)
=======
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
>>>>>>> dfbb8305 (.)
     */
    private function getTransitionAction(string $stateKey, array $stateData): ?Action
    {
        $record = $this->getRecord();
        $recordIdRaw = \is_object($record) && isset($record->id) ? $record->id : null;

<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $recordIdRaw || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
=======
        if ($recordIdRaw === null || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
>>>>>>> dfac49d (.)
=======
        if (null === $recordIdRaw || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
>>>>>>> dfbb8305 (.)
            return null;
        }

        $recordId = \is_int($recordIdRaw) ? $recordIdRaw : SafeStringCastAction::cast($recordIdRaw);
        $stateClass = $stateData['class'];
        $stateClassName = $stateClass::class;

        if (! $this->canTransitionTo($recordId, $stateClassName)) {
            return null;
        }

        return Action::make("transition_to_{$stateKey}")
            ->icon($stateData['icon'])
            ->color($stateData['color'])
            ->action(function () use ($recordId, $stateClassName): void {
                $this->transitionState($recordId, $stateClassName);
            });
    }

    private function getRecordForTransition(int|string $recordId): Model
    {
        if (! class_exists($this->modelClass) || ! method_exists($this->modelClass, 'find')) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception('Model class not found or invalid');
=======
            throw new Exception('Model class not found or invalid');
>>>>>>> dfac49d (.)
=======
            throw new \Exception('Model class not found or invalid');
>>>>>>> dfbb8305 (.)
        }

        $recordRaw = $this->modelClass::find($recordId);

        if (! \is_object($recordRaw) || ! ($recordRaw instanceof Model)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception(__('ui::icon_state.messages.record_not_found'));
=======
            throw new Exception(__('ui::icon_state.messages.record_not_found'));
>>>>>>> dfac49d (.)
=======
            throw new \Exception(__('ui::icon_state.messages.record_not_found'));
>>>>>>> dfbb8305 (.)
        }

        $recordState = $recordRaw->getAttribute('state');
        if (! \is_object($recordState) || ! method_exists($recordState, 'transitionTo')) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
            throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> dfac49d (.)
=======
            throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> dfbb8305 (.)
        }

        return $recordRaw;
    }

    private function notifyTransitionSuccess(): void
    {
        Notification::make()
            ->title(__('ui::icon_state.messages.transition_completed.title'))
            ->body(__('ui::icon_state.messages.transition_completed.body'))
            ->success()
            ->send();
    }

    private function notifyTransitionError(string $message): void
    {
        Notification::make()
            ->title(__('ui::icon_state.messages.transition_error.title'))
            ->body($message)
            ->danger()
            ->send();
    }
}
