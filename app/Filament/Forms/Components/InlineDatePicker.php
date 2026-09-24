<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Modules\Xot\Filament\Forms\Components\XotBaseDatePicker;
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_uKoxey
use RuntimeException;
=======
<<<<<<< HEAD
use RuntimeException;
=======
<<<<<<< HEAD
=======
use RuntimeException;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3

use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua.
 *
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
class InlineDatePicker extends XotBaseDatePicker
{
    /**
     * Mese attualmente visualizzato (formato Y-m).
     */
    public string $currentViewMonth;

    /**
     * Date abilitate per la selezione.
     *
     * @var array<string>|\Closure|null
     */
    protected array|\Closure|null $enabledDates = null;

    /**
     * Vista Blade per il rendering.
     *
     * @phpstan-var view-string
     */
    /** @phpstan-ignore property.defaultValue */
    protected string $view = 'ui::filament.forms.components.inline-date-picker';

    /**
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< .merge_file_w2t90k
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

=======
<<<<<<< .merge_file_uKoxey
<<<<<<< HEAD
=======
<<<<<<< .merge_file_dZK5VL
<<<<<<< HEAD
=======
<<<<<<< HEAD
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
        // Inizializzazione con localizzazione Carbon
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

        // Hydration/Dehydration del valore
<<<<<<< .merge_file_uKoxey
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_dVtULX
=======
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

>>>>>>> laraxot/dev
<<<<<<< .merge_file_uKoxey
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
        $this->afterStateHydrated(static function (self $component, mixed $state): void {
            if (null !== $state && \is_string($state) && '' !== $state) {
                try {
                    $date = Carbon::parse($state);
                    $component->currentViewMonth = $date->format('Y-m');
                } catch (\Exception $e) {
<<<<<<< .merge_file_w2t90k
                    // Handle invalid date
=======
<<<<<<< HEAD
                    // Handle invalid date
=======
<<<<<<< .merge_file_uKoxey
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    // Handle invalid date
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3
                    $component->currentViewMonth = now()->format('Y-m');
                }
            }
        });

        $this->dehydrateStateUsing(static function (self $_component, mixed $state): ?string {
            if (null !== $state && \is_string($state) && '' !== $state) {
                try {
                    return Carbon::parse($state)->format('Y-m-d');
                } catch (\Exception $e) {
                    return null;
                }
            }

            return null;
        });
    }

    /**
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if (! $currentMonth) {
            return;
        }
        $this->currentViewMonth = $currentMonth->subMonthNoOverflow()->format('Y-m');
    }

    /**
     * Naviga al mese successivo.
     */
    public function nextMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if (! $currentMonth) {
            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
     *
     * @param array<string>|\Closure $dates
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_uKoxey
=======
<<<<<<< .merge_file_dZK5VL
<<<<<<< HEAD
     * @param array<string>|\Closure $dates
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_dVtULX
<<<<<<< HEAD
     * @param array<string>|\Closure $dates
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_uKoxey
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
     */
    public function enabledDates(array|\Closure $dates): static
    {
        $this->enabledDates = $dates;

        return $this;
    }

    /**
     * Imposta il mese corrente di visualizzazione.
     *
     * @param string $month Formato Y-m (es. '2025-06')
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_uKoxey
<<<<<<< HEAD
=======
<<<<<<< .merge_file_dZK5VL
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
     * @param string $month Formato Y-m (es. '2025-06')
=======
>>>>>>> .merge_file_16zJ4W
     */
    public function currentViewMonth(string $month): static
    {
        if (empty($month) || ! preg_match('/^\d{4}-\d{2}$/', $month)) {
            $this->currentViewMonth = now()->format('Y-m');
        } else {
<<<<<<< .merge_file_dZK5VL
            // Verifica che sia una data valida
<<<<<<< .merge_file_uKoxey
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
     */
    public function currentViewMonth(string $month): static
    {
        if (empty($month) || ! preg_match('/^\d{4}-\d{2}$/', $month)) {
            $this->currentViewMonth = now()->format('Y-m');
        } else {
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_uKoxey
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
            try {
                Carbon::createFromFormat('Y-m', $month);
                $this->currentViewMonth = $month;
            } catch (\Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }

        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     *
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $datesRaw = $this->evaluate($this->enabledDates) ?? [];

        if (! is_iterable($datesRaw)) {
            $datesRaw = [];
        }

        /** @var iterable<int|string, mixed> $datesRaw */
        $dates = \is_array($datesRaw) ? $datesRaw : iterator_to_array($datesRaw);

        /** @var Collection<int, non-falsy-string> $result */
        $result = collect($dates)->map(static function (mixed $date): string {
            if (! \is_string($date) || '' === $date) {
                return '';
            }
            try {
                return Carbon::parse($date)->format('Y-m-d');
            } catch (\Exception $e) {
                return '';
            }
        })->filter(static fn (string $v): bool => '' !== $v)->values(); // Remove empty strings and reindex

        /** @var Collection<int, string> $resultTyped */
        $resultTyped = $result;

        return $resultTyped;
    }

    /**
     * Verifica se una data è abilitata.
     */
    public function isDateEnabled(string $date): bool
    {
        return $this->getEnabledDates()->isEmpty() || $this->getEnabledDates()->contains($date);
    }

    /**
     * Genera i dati del calendario per il mese corrente.
     *
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
<<<<<<< .merge_file_w2t90k
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
=======
<<<<<<< HEAD
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
=======
<<<<<<< .merge_file_uKoxey
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3
        if (empty($this->currentViewMonth) || ! preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }

        $targetMonthRaw = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if (! $targetMonthRaw) {
            $targetMonthRaw = Carbon::now();
        }
        $targetMonth = $targetMonthRaw->startOfMonth();
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);

        $weeks = collect();
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = collect();

            for ($i = 0; $i < 7; ++$i) {
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_uKoxey
<<<<<<< HEAD
                $week->push($this->buildCalendarDayCell($currentDay, $targetMonth));
=======
=======
<<<<<<< .merge_file_dZK5VL
<<<<<<< HEAD
                $week->push($this->buildCalendarDayCell($currentDay, $targetMonth));
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                $week->push($this->buildCalendarDayCell($currentDay, $targetMonth));
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();

                $isSelected = false;
                try {
                    $state = $this->getState();
                    if ($state && \is_string($state)) {
                        $isSelected = $currentDay->isSameDay(Carbon::parse($state));
                    }
                } catch (\Throwable $e) {
                    $isSelected = false;
                }

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

                $week->push([
                    'dateString' => $currentDay->format('Y-m-d'),
                    'datetime' => $currentDay->format('Y-m-d'),
                    'day' => $currentDay->day,
                    'isCurrentMonth' => $isCurrentMonth,
                    'isToday' => $isToday,
                    'isSelected' => $isSelected,
                    'isEnabled' => $isEnabled,
                ]);

<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_uKoxey
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_dZK5VL
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
                $currentDay->addDay();
            }

            $weeks->push($week->toArray());
        }

        $res = [
<<<<<<< .merge_file_w2t90k
=======
=======
<<<<<<< .merge_file_uKoxey
        return [
=======
<<<<<<< HEAD
        return [
=======
<<<<<<< HEAD
        $res = [
=======
        return [
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3
            'weeks' => $weeks->toArray(),
            'month' => $targetMonth,
            'monthName' => $targetMonth->translatedFormat('F'),
            'year' => $targetMonth->year,
            'weekdays' => $this->getLocalizedWeekdays(),
        ];
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< HEAD
<<<<<<< .merge_file_uKoxey
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3

        /* @var array<string, mixed> $res */
        return $res;
    }

    /**
<<<<<<< .merge_file_w2t90k
=======
<<<<<<< .merge_file_dZK5VL
     * @return array<string, mixed>
     */
    private function buildCalendarDayCell(Carbon $currentDay, Carbon $targetMonth): array
    {
        $isCurrentMonth = $currentDay->month === $targetMonth->month;

        return [
            'dateString' => $currentDay->format('Y-m-d'),
            'datetime' => $currentDay->format('Y-m-d'),
            'day' => $currentDay->day,
            'isCurrentMonth' => $isCurrentMonth,
            'isToday' => $currentDay->isToday(),
            'isSelected' => $this->isDaySelected($currentDay),
            'isEnabled' => $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth,
        ];
    }

    private function isDaySelected(Carbon $currentDay): bool
    {
        try {
            $state = $this->getState();
            if ($state && \is_string($state)) {
                return $currentDay->isSameDay(Carbon::parse($state));
            }
        } catch (\Throwable) {
            return false;
        }

        return false;
<<<<<<< .merge_file_uKoxey
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
    }

    /**
=======
>>>>>>> .merge_file_16zJ4W
>>>>>>> .merge_file_hGm4v3
     * Ottiene i dati per la vista.
     *
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        $calendarData = $this->generateCalendarData();

<<<<<<< .merge_file_w2t90k
        $res = array_merge(parent::getViewData(), [
=======
<<<<<<< HEAD
        $res = array_merge(parent::getViewData(), [
=======
<<<<<<< .merge_file_uKoxey
        return array_merge(parent::getViewData(), [
=======
<<<<<<< HEAD
        return array_merge(parent::getViewData(), [
=======
<<<<<<< HEAD
        $res = array_merge(parent::getViewData(), [
=======
        return array_merge(parent::getViewData(), [
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3
            'calendarData' => $calendarData,
            'currentViewMonth' => $this->currentViewMonth,
            'currentValue' => $this->getState(),
            'enabledDates' => $this->getEnabledDates(),
            'statePath' => $this->getStatePath(),
            'monthName' => $calendarData['monthName'],
            'year' => $calendarData['year'],
            'weekdays' => $calendarData['weekdays'],
        ]);

        /* @var array<string, mixed> $res */
        return $res;
<<<<<<< .merge_file_w2t90k
=======
=======
<<<<<<< .merge_file_uKoxey
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

        /* @var array<string, mixed> $res */
        return $res;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_hGm4v3
    }

    /**
     * Ottiene i giorni della settimana localizzati da Carbon.
     *
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);

        for ($i = 0; $i < 7; ++$i) {
            $dayCarbon = $monday->copy()->addDays($i)->locale(App::getLocale());
            if (! $dayCarbon instanceof Carbon) {
<<<<<<< .merge_file_w2t90k
                throw new \RuntimeException('Expected Carbon instance');
=======
<<<<<<< HEAD
<<<<<<< .merge_file_uKoxey
=======
                throw new \RuntimeException('Expected Carbon instance');
=======
<<<<<<< HEAD
                throw new RuntimeException('Expected Carbon instance');
=======
<<<<<<< HEAD
>>>>>>> .merge_file_dVtULX
                throw new \RuntimeException('Expected Carbon instance');
=======
                throw new RuntimeException('Expected Carbon instance');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_uKoxey
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dVtULX
>>>>>>> .merge_file_hGm4v3
            }
            $shortDay = $dayCarbon->shortLocaleDayOfWeek;
            $weekdays[] = \is_string($shortDay) ? mb_substr($shortDay, 0, 1) : (string) $shortDay;
        }

        return $weekdays;
    }
}
