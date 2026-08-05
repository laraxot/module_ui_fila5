<?php

declare(strict_types=1);

// app/Rules/OpeningHoursRule.php

namespace Modules\UI\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;
use Modules\Xot\Filament\Traits\TransTrait;

class OpeningHoursRule implements ValidationRule
{
    use TransTrait;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validate(string $_attribute, mixed $value, \Closure $fail): void
    {
        $days = app(GetDaysMappingAction::class)->execute();
        /*
         * foreach ($days as $dayKey => $dayLabel) {
         * $hours = $value[$dayKey];
         *
         * foreach ($hours as $hourKey => $hour) {
         * if(is_string($hour) && $hour===''){
         *
         * $fail("L'orario di {$hourKey} deve essere impostato per il {$dayLabel}.");
         * }
         * }
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        if (! \is_array($value)) {
            return;
        }

        foreach ($days as $dayKey => $dayLabel) {
<<<<<<< HEAD
=======
=======
        foreach ($days as $dayKey => $dayLabel) {
            /* @phpstan-ignore-next-line */
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            $dayHours = $value[$dayKey] ?? [];

            if (! \is_array($dayHours)) {
                continue;
            }

<<<<<<< HEAD
            /** @var array<string, mixed> $typedDayHours */
            $typedDayHours = $dayHours;

=======
<<<<<<< HEAD
            /** @var array<string, mixed> $typedDayHours */
            $typedDayHours = $dayHours;

=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            // Type narrowing per dayLabel
            $dayLabelString = \is_string($dayLabel) ? $dayLabel : (string) $dayLabel;

            // Valida ogni sessione (mattina e pomeriggio)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            $this->validateSession($typedDayHours, 'morning', $dayLabelString, $fail);
            $this->validateSession($typedDayHours, 'afternoon', $dayLabelString, $fail);

            // Valida la coerenza tra sessioni dello stesso giorno
            $this->validateDayLogic($typedDayHours, $dayLabelString, $fail);
<<<<<<< HEAD
=======
=======
            $this->validateSession($dayHours, 'morning', $dayLabelString, $fail);
            $this->validateSession($dayHours, 'afternoon', $dayLabelString, $fail);

            // Valida la coerenza tra sessioni dello stesso giorno
            $this->validateDayLogic($dayHours, $dayLabelString, $fail);
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
        }
    }

    /**
     * Valida la coerenza tra le sessioni dello stesso giorno.
     */
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $dayHours
     */
=======
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $dayHours
     */
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    private function validateDayLogic(array $dayHours, string $dayLabel, \Closure $fail): void
    {
        $morningTo = $this->cleanTimeValue($dayHours['morning_to'] ?? null);
        $afternoonFrom = $this->cleanTimeValue($dayHours['afternoon_from'] ?? null);

        // Se ci sono entrambe le sessioni, la chiusura mattina deve essere prima dell'apertura pomeriggio
<<<<<<< HEAD
        if (null !== $morningTo && null !== $afternoonFrom) {
=======
<<<<<<< HEAD
        if (null !== $morningTo && null !== $afternoonFrom) {
=======
        if ($morningTo !== null && $afternoonFrom !== null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            if ($morningTo >= $afternoonFrom) {
                $fail(static::trans('validation.morning_before_afternoon', params: ['day' => $dayLabel]));
            }
        }
    }

    /**
     * Valida una sessione specifica (mattina o pomeriggio).
     */
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $dayHours
     */
=======
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $dayHours
     */
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    private function validateSession(array $dayHours, string $session, string $dayLabel, \Closure $fail): void
    {
        $fromKey = "{$session}_from";
        $toKey = "{$session}_to";
<<<<<<< HEAD
        $sessionLabel = 'morning' === $session
=======
<<<<<<< HEAD
        $sessionLabel = 'morning' === $session
=======
        $sessionLabel = $session === 'morning'
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            ? static::trans('validation.opening_hours.morning')
            : static::trans('validation.opening_hours.afternoon');

        $fromTime = $this->cleanTimeValue($dayHours[$fromKey] ?? null);
        $toTime = $this->cleanTimeValue($dayHours[$toKey] ?? null);
        /*
         * // Validazione formato orario
         * if ($fromTime !== null && !$this->isValidTimeFormat($fromTime)) {
         * $fail("L'orario di apertura {$sessionLabel} per {$dayLabel} deve essere nel formato HH:MM.");
         * return;
         * }
         *
         * if ($toTime !== null && !$this->isValidTimeFormat($toTime)) {
         * $fail("L'orario di chiusura {$sessionLabel} per {$dayLabel} deve essere nel formato HH:MM.");
         * return;
         * }
         */
        // Validazione completezza: se uno è specificato, anche l'altro deve esserlo
<<<<<<< HEAD
        if (null !== $fromTime && null === $toTime) {
=======
<<<<<<< HEAD
        if (null !== $fromTime && null === $toTime) {
=======
        if ($fromTime !== null && $toTime === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            $fail(static::trans('validation.opening_hours.missing_closing_time', params: [
                'session' => $sessionLabel,
                'day' => $dayLabel,
            ]));

            return;
        }

<<<<<<< HEAD
        if (null !== $toTime && null === $fromTime) {
=======
<<<<<<< HEAD
        if (null !== $toTime && null === $fromTime) {
=======
        if ($toTime !== null && $fromTime === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            $fail(static::trans('validation.opening_hours.missing_opening_time', params: [
                'session' => $sessionLabel,
                'day' => $dayLabel,
            ]));

            return;
        }

        // Validazione logica: apertura deve essere prima della chiusura
<<<<<<< HEAD
        if (null !== $fromTime && null !== $toTime) {
=======
<<<<<<< HEAD
        if (null !== $fromTime && null !== $toTime) {
=======
        if ($fromTime !== null && $toTime !== null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            if ($fromTime >= $toTime) {
                $fail(static::trans('validation.opening_hours.opening_before_closing', params: [
                    'session' => $sessionLabel,
                    'day' => $dayLabel,
                ]));

                return;
            }
        }
    }

    /**
     * Pulisce il valore dell'orario (rimuove stringhe vuote, spazi, etc.).
     */
    private function cleanTimeValue(mixed $value): ?string
    {
<<<<<<< HEAD
        if (null === $value || '' === $value || '--:--' === $value) {
=======
<<<<<<< HEAD
        if (null === $value || '' === $value || '--:--' === $value) {
=======
        if ($value === null || $value === '' || $value === '--:--') {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            return null;
        }

        if (\is_string($value)) {
            $cleaned = trim($value);

<<<<<<< HEAD
            return '' === $cleaned ? null : $cleaned;
=======
<<<<<<< HEAD
            return '' === $cleaned ? null : $cleaned;
=======
            return $cleaned === '' ? null : $cleaned;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
        }

        return null;
    }

    /*
     * Verifica se l'orario è nel formato HH:MM valido.
     */
    /*
    private function isValidTimeFormat(string $time): bool
    {
        return (bool) preg_match('/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/', $time);
    }
        */
}
