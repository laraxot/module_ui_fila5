<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> laraxot/dev

/**
 * Action per applicare il calendario al panel Filament.
 * NOTA: Temporaneamente disabilitato per migrazione a Filament v4.
 * Il pacchetto Saade\FilamentFullCalendar non è ancora compatibile con Filament v4.
 */
final class ApplyCalendarToPanelAction
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_FpsdUE
<<<<<<< HEAD
    public function execute(Panel $panel, string $calendar_class): Panel
=======
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< .merge_file_zypWnf
=======
    public function execute(Panel $panel, string $calendarClass): Panel
=======
<<<<<<< HEAD
>>>>>>> .merge_file_fOGQ9G
    public function execute(Panel $panel, string $calendar_class): Panel
=======
    public function execute(Panel $panel, string $calendarClass): Panel
>>>>>>> laraxot/dev
<<<<<<< .merge_file_zypWnf
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
>>>>>>> .merge_file_sV9xiH
>>>>>>> .merge_file_fOGQ9G
=======
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
>>>>>>> laraxot/dev
=======
    use QueueableAction;

    public function execute(Panel $panel, string $calendarClass): Panel
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
