<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
<<<<<<< HEAD
=======
<<<<<<< .merge_file_OBRcG4
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Ysa4s4
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_NRmVmJ
use Filament\Tables\Columns\ColumnGroup;
=======
>>>>>>> .merge_file_mCNWDg
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumnGroup;
use Webmozart\Assert\Assert;

<<<<<<< .merge_file_Ysa4s4
class IconStateGroupColumn extends ColumnGroup
<<<<<<< .merge_file_OBRcG4
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumnGroup;
use Webmozart\Assert\Assert;

class IconStateGroupColumn extends XotBaseColumnGroup
<<<<<<< HEAD
=======
<<<<<<< .merge_file_OBRcG4
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
class IconStateGroupColumn extends XotBaseColumnGroup
>>>>>>> .merge_file_mCNWDg
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
{
    public string $stateClass = '';

    public string $modelClass = '';

    /**
     * Form data holder.
     *
     * @var array<string, mixed>
     */
    public ?array $data = [];

    protected function setUp(): void
    {
        // $this->label('');
    }

    public function stateClass(string $stateClass, string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;
        $statesRaw = [];

        if (class_exists($stateClass) && method_exists($stateClass, 'getStateMapping')) {
            $stateMapping = $stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $statesArray = $stateMapping->toArray();
                $statesRaw = is_array($statesArray) ? $statesArray : [];
            }
        }

        /** @var array<string, string> $states */
        $states = $statesRaw;
        $columns = [];

        foreach ($states as $stateKey => $stateClassItem) {
            if (! is_string($stateClassItem) || ! class_exists($stateClassItem)) {
                continue;
            }

            if (! is_string($stateKey)) {
                continue;
            }

            $stateInstance = new $stateClassItem($this->modelClass);
            Assert::isInstanceOf($stateInstance, StateContract::class);
            $visibleKey = $stateKey.'-visible';
            $this->data[$visibleKey] = true;

            $column = IconColumn::make($stateKey.'-icon')
                ->icon($stateInstance->icon(...))
                ->color($stateInstance->color(...))
                ->tooltip($stateInstance->label(...))
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;',
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
                ->default(function (Model $record) use ($stateClassItem, $stateKey): ?bool {
                    if (isset($record->state) && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                        $canTransition = $record->state->canTransitionTo($stateClassItem);
                        $res = is_bool($canTransition) ? $canTransition : false;
                    } else {
                        $res = false;
                    }
                    $visibleKey = $stateKey.'-visible';
                    $this->data[$visibleKey] = $res;
                    if (! $res) {
                        return null;
                    }

                    return true;
                });

            $column->action(
                Action::make($stateKey.'-action')
                    ->requiresConfirmation()
<<<<<<< HEAD
=======
<<<<<<< .merge_file_OBRcG4
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Ysa4s4
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_NRmVmJ
                    ->modalHeading(function (Model $record) use ($stateInstance) {
=======
                    ->modalHeading(static function (Model $record) use ($stateInstance) {
>>>>>>> .merge_file_mCNWDg
                        // StateContract provides modalHeading()
                        return $stateInstance->modalHeading();
                    })
                    ->modalDescription(static function (Model $record) use ($stateInstance) {
                        // StateContract provides modalDescription()
                        return $stateInstance->modalDescription();
                    })
<<<<<<< .merge_file_Ysa4s4
                    ->schema(function (Model $record) use ($stateInstance) {
<<<<<<< .merge_file_OBRcG4
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
                    ->modalHeading(static function (Model $record) use ($stateInstance) {
                        // StateContract provides modalHeading()
                        return $stateInstance->modalHeading();
                    })
                    ->modalDescription(static function (Model $record) use ($stateInstance) {
                        // StateContract provides modalDescription()
                        return $stateInstance->modalDescription();
                    })
                    ->schema(static function (Model $record) use ($stateInstance) {
<<<<<<< HEAD
=======
<<<<<<< .merge_file_OBRcG4
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->schema(static function (Model $record) use ($stateInstance) {
>>>>>>> .merge_file_mCNWDg
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
                        // StateContract provides modalFormSchema()
                        return $stateInstance->modalFormSchema();
                    })
                    ->fillForm($stateInstance->modalFillFormByRecord(...))
<<<<<<< HEAD
                    ->action(static function (Model $record, array $data) use ($stateInstance): void {
=======
<<<<<<< .merge_file_OBRcG4
=======
<<<<<<< .merge_file_Ysa4s4
<<<<<<< HEAD
                    ->action(function (Model $record, array $data) use ($stateInstance): void {
=======
<<<<<<< HEAD
                    ->action(static function (Model $record, array $data) use ($stateInstance): void {
=======
>>>>>>> .merge_file_NRmVmJ
<<<<<<< HEAD
                    ->action(function (Model $record, array $data) use ($stateInstance): void {
=======
                    ->action(static function (Model $record, array $data) use ($stateInstance): void {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_OBRcG4
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                    ->action(static function (Model $record, array $data) use ($stateInstance): void {
>>>>>>> .merge_file_mCNWDg
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
                        // Ensure data is treated as array<string, mixed> for PHPStan and StateContract
                        /** @var array<string, mixed> $typedData */
                        $typedData = $data;

                        $stateInstance->modalActionByRecord($record, $typedData);
                    })
            );

<<<<<<< HEAD
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible((bool) $visibleValue);
=======
<<<<<<< .merge_file_OBRcG4
=======
<<<<<<< .merge_file_Ysa4s4
<<<<<<< HEAD
            $column->visible((bool) ($this->data[$visibleKey] ?? false));
=======
<<<<<<< HEAD
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible((bool) $visibleValue);
=======
>>>>>>> .merge_file_NRmVmJ
<<<<<<< HEAD
            $column->visible((bool) ($this->data[$visibleKey] ?? false));
=======
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible((bool) $visibleValue);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_OBRcG4
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible((bool) $visibleValue);
>>>>>>> .merge_file_mCNWDg
>>>>>>> .merge_file_NRmVmJ
>>>>>>> laraxot/dev
            $columns[] = $column;
        }

        $this->columns($columns);

        return $this;
    }
}
