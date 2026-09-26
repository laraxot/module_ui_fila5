<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\TextColumn;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UObH3E

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\OpeningHoursField}.
=======
<<<<<<< .merge_file_009P5h

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\OpeningHoursField}.
=======
<<<<<<< .merge_file_AiRD6q

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\OpeningHoursField}.
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Modules\UI\Filament\Forms\Components\OpeningHoursField;

/**
 * Controparte in lista di {@see OpeningHoursField}.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> .merge_file_TALaJN
>>>>>>> .merge_file_DkM4kc
>>>>>>> .merge_file_8q6xIP
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
 *
 * Stesso fatto di dominio (orari settimanali per fascia mattina/pomeriggio), due
 * superfici diverse per forma: il form edita ogni giorno con `TimePicker` dedicati
 * (28 campi); una tabella con 28 colonne per riga non è leggibile, quindi qui la
 * variabilità si sposta nello *stato* della cella — un riepilogo testuale — invece
 * che nello schema, come già per gli altri casi in
 * {@link ../../../../Ptv/docs/form-column-parity.md "Parità non significa clone", punto 3}.
 *
 * Usage:
 * ```php
 * 'opening_hours' => OpeningHoursColumn::make(),
 * ```
 *
 * @see Modules/Ptv/docs/form-column-parity.md
 */
class OpeningHoursColumn extends TextColumn
{
    protected const string DEFAULT_NAME = 'opening_hours';

    public static function make(?string $name = null): static
    {
        $column = parent::make($name ?? static::DEFAULT_NAME);

        return $column->formatStateUsing(static fn (mixed $state): string => self::summarizeOpeningHours($state));
    }

    /**
     * Riepilogo testuale dello stato — estratto come metodo pubblico e statico,
     * non solo dentro la closure, cosi' e' testabile senza reflection sugli
     * interni di Filament.
     */
    public static function summarizeOpeningHours(mixed $state): string
    {
        if (! is_array($state)) {
            return '—';
        }

        /** @var array<string, string> $days */
        $days = app(GetDaysMappingAction::class)->execute();
        $parts = [];

        foreach ($days as $dayKey => $dayLabel) {
            $day = $state[$dayKey] ?? null;
            $slots = is_array($day) ? self::formatSlots($day) : [];

            $abbrev = mb_substr($dayLabel, 0, 3);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UObH3E
            $parts[] = $slots === []
=======
<<<<<<< .merge_file_009P5h
=======
<<<<<<< .merge_file_AiRD6q
>>>>>>> .merge_file_DkM4kc
<<<<<<< HEAD
            $parts[] = $slots === []
=======
            $parts[] = [] === $slots
>>>>>>> laraxot/dev
<<<<<<< .merge_file_009P5h
=======
=======
            $parts[] = [] === $slots
>>>>>>> .merge_file_TALaJN
>>>>>>> .merge_file_DkM4kc
>>>>>>> .merge_file_8q6xIP
=======
            $parts[] = [] === $slots
>>>>>>> laraxot/dev
=======
            $parts[] = [] === $slots
>>>>>>> laraxot/dev
                ? "{$abbrev} chiuso"
                : $abbrev.' '.implode(', ', $slots);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UObH3E
        return $parts === [] ? '—' : implode(' · ', $parts);
=======
<<<<<<< .merge_file_009P5h
=======
<<<<<<< .merge_file_AiRD6q
>>>>>>> .merge_file_DkM4kc
<<<<<<< HEAD
        return $parts === [] ? '—' : implode(' · ', $parts);
=======
        return [] === $parts ? '—' : implode(' · ', $parts);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_009P5h
=======
=======
        return [] === $parts ? '—' : implode(' · ', $parts);
>>>>>>> .merge_file_TALaJN
>>>>>>> .merge_file_DkM4kc
>>>>>>> .merge_file_8q6xIP
=======
        return [] === $parts ? '—' : implode(' · ', $parts);
>>>>>>> laraxot/dev
=======
        return [] === $parts ? '—' : implode(' · ', $parts);
>>>>>>> laraxot/dev
    }

    /**
     * @param array<array-key, mixed> $day
     *
     * @return list<string>
     */
    private static function formatSlots(array $day): array
    {
        $slots = [];
        foreach (['morning', 'afternoon'] as $period) {
            $from = $day["{$period}_from"] ?? null;
            $until = $day["{$period}_to"] ?? null;
            if (is_string($from) && is_string($until) && '' !== $from && '' !== $until) {
                $slots[] = "{$from}-{$until}";
            }
        }

        return $slots;
    }
}
