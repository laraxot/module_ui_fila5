<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< .merge_file_FpsdUE
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> .merge_file_sV9xiH
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 804451c (Lint)

/**
 * Action per applicare il calendario al panel Filament.
 * NOTA: Temporaneamente disabilitato per migrazione a Filament v4.
 * Il pacchetto Saade\FilamentFullCalendar non è ancora compatibile con Filament v4.
 */
final class ApplyCalendarToPanelAction
{
<<<<<<< HEAD
<<<<<<< .merge_file_FpsdUE
<<<<<<< HEAD
    public function execute(Panel $panel, string $calendar_class): Panel
=======
    use QueueableAction;

<<<<<<< HEAD
    public function execute(Panel $panel, string $calendarClass): Panel
=======
<<<<<<< HEAD
=======
    use QueueableAction;

<<<<<<< HEAD
>>>>>>> 804451c (Lint)
    public function execute(Panel $panel, string $calendar_class): Panel
=======
    public function execute(Panel $panel, string $calendarClass): Panel
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
>>>>>>> .merge_file_sV9xiH
=======
>>>>>>> 804451c (Lint)
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
