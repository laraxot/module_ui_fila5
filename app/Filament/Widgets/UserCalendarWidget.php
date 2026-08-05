<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Illuminate\Support\Str;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

class UserCalendarWidget extends XotBaseSchemaWidget
<<<<<<< HEAD
=======
=======
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class UserCalendarWidget extends XotBaseWidget
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
{
    public string $type;

    protected string $view = 'ui::filament.widgets.user-calendar';

    public function getActionName(string $function): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $actionSuffix = Str::of($function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $modelString = SafeStringCastAction::cast($model);

        return Str::of($modelString)
            ->replace('\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$actionSuffix)
<<<<<<< HEAD
=======
=======
        $action_suffix = Str::of($function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $modelString = \is_string($model) ? $model : (string) $model;

        return Str::of($modelString)
            ->replace('\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$action_suffix)
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            ->toString();
    }

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $fetchInfo
     * @param array<string, mixed> $fetchInfo
     *
=======
<<<<<<< HEAD
     * @param array<string, mixed> $fetchInfo
     * @param array<string, mixed> $fetchInfo
     *
=======
     * @param  array<string, mixed>  $fetchInfo
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (! class_exists($action)) {
            return [];
        }

        $actionInstance = app($action);
        if (! \is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
            return [];
        }

<<<<<<< HEAD
        return self::normalizeEventsArray($actionInstance->execute($fetchInfo));
=======
<<<<<<< HEAD
        return self::normalizeEventsArray($actionInstance->execute($fetchInfo));
=======
        $resultRaw = $actionInstance->execute($fetchInfo);

        if (! self::isValidEventsArray($resultRaw)) {
            return [];
        }

        /** @var array<int, array<string, mixed>> $result */
        $result = $resultRaw;

        return $result;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }

    /**
     * @return array<int, TextInput|Grid>
     */
    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (class_exists($action)) {
            $actionInstance = app($action);
            if (\is_object($actionInstance) && method_exists($actionInstance, 'execute')) {
<<<<<<< HEAD
                return self::normalizeFormSchema($actionInstance->execute());
=======
<<<<<<< HEAD
                return self::normalizeFormSchema($actionInstance->execute());
=======
                $resultRaw = $actionInstance->execute();
                if (self::isValidFormSchema($resultRaw)) {
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

                    return $result;
                }
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            }
        }

        // Fallback schema
        return [
            TextInput::make('title'),
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    /**
     * @param array<string, mixed>|null $view
     * @param array<string, mixed>|null $resource
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
     * Normalize dynamic calendar action output into typed event arrays.
     *
     * @return array<int, array<string, mixed>>
     */
    private static function normalizeEventsArray(mixed $value): array
    {
        if (! \is_array($value)) {
            return [];
        }

        /** @var array<int, array<string, mixed>> $events */
        $events = [];
        foreach ($value as $event) {
            if (! \is_array($event)) {
                continue;
            }

            $normalizedEvent = [];
            foreach ($event as $key => $eventValue) {
                if (! \is_string($key)) {
                    continue 2;
                }

                $normalizedEvent[$key] = $eventValue;
            }

            $events[] = $normalizedEvent;
        }

        return $events;
    }

    /**
     * @phpstan-return array<int, TextInput|Grid>
     */
    private static function normalizeFormSchema(mixed $value): array
    {
        if (! \is_array($value)) {
            return [];
        }

        $schema = [];
        foreach ($value as $key => $item) {
            if (! \is_int($key)) {
                return [];
            }

            if (! ($item instanceof TextInput) && ! ($item instanceof Grid)) {
                return [];
            }

            $schema[] = $item;
        }

        return $schema;
<<<<<<< HEAD
=======
=======
     * Validate that the given value is an array of events with string keys.
     */
    private static function isValidEventsArray(mixed $value): bool
    {
        if (! \is_array($value)) {
            return false;
        }

        foreach ($value as $event) {
            if (! \is_array($event)) {
                return false;
            }

            foreach (array_keys($event) as $key) {
                if (! \is_string($key)) {
                    return false;
                }
            }
        }

        return true;
    }

    private static function isValidFormSchema(mixed $value): bool
    {
        if (! \is_array($value)) {
            return false;
        }

        foreach ($value as $key => $item) {
            if (! \is_int($key)) {
                return false;
            }

            if (! ($item instanceof TextInput) && ! ($item instanceof Grid)) {
                return false;
            }
        }

        return true;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }
}
