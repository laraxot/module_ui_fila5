<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Notifications\Notification;
<<<<<<< .merge_file_1u1WPg
use Filament\Tables\Columns\Column;
=======
<<<<<<< .merge_file_63Oa9T
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\Column;
=======
use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\Column;
>>>>>>> laraxot/dev
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\StateContract;
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
<<<<<<< .merge_file_1u1WPg
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;
=======
>>>>>>> .merge_file_ReFILM
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
>>>>>>> laraxot/dev

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
<<<<<<< .merge_file_63Oa9T
<<<<<<< HEAD
final class IconStateSplitColumn extends Column
=======
final class IconStateSplitColumn extends XotBaseColumn
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1u1WPg
<<<<<<< HEAD
final class IconStateSplitColumn extends Column
=======
<<<<<<< HEAD
final class IconStateSplitColumn extends XotBaseColumn
=======
<<<<<<< HEAD
final class IconStateSplitColumn extends Column
=======
final class IconStateSplitColumn extends XotBaseColumn
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
final class IconStateSplitColumn extends XotBaseColumn
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
final class IconStateSplitColumn extends Column
>>>>>>> laraxot/dev
{
    protected string $view = 'ui::filament.tables.columns.icon-state-split';

    protected string $stateClass = '';

    protected string $modelClass = '';

    /**
     * Configure the state class and model class for this column.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
=======
<<<<<<< HEAD
     * @param  string  $stateClass  The state machine class (e.g., AppointmentState::class)
     * @param  string  $modelClass  The model class (e.g., Appointment::class)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
<<<<<<< .merge_file_1u1WPg
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
<<<<<<< .merge_file_63Oa9T
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ReFILM
=======
     * @param  string  $stateClass  The state machine class (e.g., AppointmentState::class)
     * @param  string  $modelClass  The model class (e.g., Appointment::class)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_63Oa9T
=======
        } catch (\Exception) {
=======
<<<<<<< HEAD
        } catch (Exception) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
        } catch (\Exception) {
=======
        } catch (Exception) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
        } catch (\Exception) {
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_63Oa9T
        if ($action === 'prova') {
=======
<<<<<<< HEAD
        if ($action === 'prova') {
=======
<<<<<<< HEAD
        if ('prova' === $action) {
=======
        if ($action === 'prova') {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
>>>>>>> laraxot/dev
=======
        if ('prova' === $action) {
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_63Oa9T
=======
                throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
<<<<<<< HEAD
                throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
                throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
                throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
                throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> laraxot/dev
            }
            $state->transitionTo($stateClass);

            $this->notifyTransitionSuccess();
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (\Exception $e) {
=======
<<<<<<< .merge_file_63Oa9T
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (\Exception $e) {
=======
        } catch (Exception $e) {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
>>>>>>> laraxot/dev
=======
        } catch (\Exception $e) {
>>>>>>> laraxot/dev
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

<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1u1WPg
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
>>>>>>> laraxot/dev
    private function getStateInstance(mixed $stateClassItem, mixed $record): ?StateContract
    {
        try {
            if (! \is_string($stateClassItem) || ! class_exists($stateClassItem)) {
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
    /**
     * @param  array<array-key, mixed>|Model|null  $record
     */
    private function getStateInstance(string $stateClassItem, Model|array|null $record): ?StateContract
    {
        try {
            if (! class_exists($stateClassItem)) {
<<<<<<< .merge_file_63Oa9T
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    /**
     * @param array<array-key, mixed>|Model|null $record
     */
    private function getStateInstance(string $stateClassItem, Model|array|null $record): ?StateContract
    {
        try {
            if (! class_exists($stateClassItem)) {
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
>>>>>>> laraxot/dev
                return null;
            }

            $stateInstance = new $stateClassItem($record);
            if (! $stateInstance instanceof StateContract) {
                return null;
            }

            return $stateInstance;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
        } catch (\Exception) {
=======
<<<<<<< HEAD
        } catch (Exception) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
        } catch (\Exception) {
=======
        } catch (Exception) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
        } catch (\Exception) {
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
<<<<<<< .merge_file_63Oa9T
=======
     * @param  array{class: StateContract, icon: string, label: string, color: string, tooltip: string}  $stateData
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1u1WPg
=======
<<<<<<< HEAD
     * @param  array{class: StateContract, icon: string, label: string, color: string, tooltip: string}  $stateData
=======
<<<<<<< HEAD
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
=======
     * @param  array{class: StateContract, icon: string, label: string, color: string, tooltip: string}  $stateData
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wQHvmM
>>>>>>> .merge_file_ReFILM
=======
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
     * @param array{class: StateContract, icon: string, label: string, color: string, tooltip: string} $stateData
>>>>>>> laraxot/dev
     */
    private function getTransitionAction(string $stateKey, array $stateData): ?Action
    {
        $record = $this->getRecord();
        $recordIdRaw = \is_object($record) && isset($record->id) ? $record->id : null;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
        if (null === $recordIdRaw || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
=======
<<<<<<< HEAD
        if ($recordIdRaw === null || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
        if (null === $recordIdRaw || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
=======
        if ($recordIdRaw === null || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
        if (null === $recordIdRaw || (! \is_int($recordIdRaw) && ! \is_string($recordIdRaw))) {
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_63Oa9T
            throw new Exception('Model class not found or invalid');
=======
<<<<<<< HEAD
            throw new Exception('Model class not found or invalid');
=======
<<<<<<< HEAD
            throw new \Exception('Model class not found or invalid');
=======
            throw new Exception('Model class not found or invalid');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
>>>>>>> laraxot/dev
=======
            throw new \Exception('Model class not found or invalid');
>>>>>>> laraxot/dev
        }

        $recordRaw = $this->modelClass::find($recordId);

        if (! \is_object($recordRaw) || ! ($recordRaw instanceof Model)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
            throw new \Exception(__('ui::icon_state.messages.record_not_found'));
=======
<<<<<<< HEAD
            throw new Exception(__('ui::icon_state.messages.record_not_found'));
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
            throw new \Exception(__('ui::icon_state.messages.record_not_found'));
=======
            throw new Exception(__('ui::icon_state.messages.record_not_found'));
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
            throw new \Exception(__('ui::icon_state.messages.record_not_found'));
>>>>>>> laraxot/dev
        }

        $recordState = $recordRaw->getAttribute('state');
        if (! \is_object($recordState) || ! method_exists($recordState, 'transitionTo')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_63Oa9T
=======
            throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
<<<<<<< HEAD
            throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ReFILM
            throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
=======
            throw new Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> laraxot/dev
<<<<<<< .merge_file_63Oa9T
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ReFILM
=======
            throw new \Exception(__('ui::icon_state.messages.invalid_state_instance'));
>>>>>>> laraxot/dev
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
