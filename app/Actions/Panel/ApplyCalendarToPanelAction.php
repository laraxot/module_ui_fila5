<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev

/**
 * Action per applicare il calendario al panel Filament.
 * NOTA: Temporaneamente disabilitato per migrazione a Filament v4.
 * Il pacchetto Saade\FilamentFullCalendar non è ancora compatibile con Filament v4.
 */
final class ApplyCalendarToPanelAction
{
<<<<<<< HEAD
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
=======
<<<<<<< HEAD
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
=======
    public function execute(Panel $panel, string $calendar_class): Panel
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    {
        // TODO: Reimplementare quando sarà disponibile un pacchetto FullCalendar compatibile con Filament v4
        // Per ora ritorniamo il panel senza modifiche per evitare errori

        // Log per debug
        if (config('app.debug')) {
            Log::info('ApplyCalendarToPanelAction: FullCalendar temporaneamente disabilitato per Filament v4');
        }

        return $panel;
    }
}
