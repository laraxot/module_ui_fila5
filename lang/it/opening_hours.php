<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_uhqAUU
<<<<<<< HEAD
=======
<<<<<<< .merge_file_WqYtXE
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r8F6zm
// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: lang/it/opening_hours.php
return [
<<<<<<< HEAD
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
=======
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
    // Laraxot module file — see docs/wiki for domain contract.
>>>>>>> laraxot/dev
=======
return [
>>>>>>> laraxot/dev
=======
return [
>>>>>>> laraxot/dev
    'instructions' => [
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
    ],
    'headers' => [
        'day' => 'Giorno',
        'morning' => 'Mattino',
        'afternoon' => 'Pomeriggio',
    ],
    'legend' => [
        'open' => 'Aperto',
        'closed' => 'Chiuso',
        'format' => 'Formato: HH:MM',
    ],
    'days' => [
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
        'sunday' => 'Domenica',
    ],
    'periods' => [
        'morning' => 'Mattino',
        'afternoon' => 'Pomeriggio',
        'evening' => 'Sera',
    ],
    'labels' => [
        'morning' => 'Mattino',
        'afternoon' => 'Pomeriggio',
        'from' => 'Dalle',
        'to' => 'Alle',
        'closed' => 'Chiuso',
    ],
    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],
    'placeholders' => [
        'morning_hours' => 'Orari del mattino',
        'afternoon_hours' => 'Orari del pomeriggio',
    ],
    'notes' => [
        'format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio]',
        'empty_hint' => 'Lasciare vuoto significa "chiuso"',
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_uhqAUU
=======
return [
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
return [
=======
return [
>>>>>>> .merge_file_8qwq1N
>>>>>>> .merge_file_r8F6zm
    'instructions' => ['title' => 'Configurazione Orari', 'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.'],
    'headers' => ['day' => 'Giorno', 'morning' => 'Mattino', 'afternoon' => 'Pomeriggio'],
    'legend' => ['open' => 'Aperto', 'closed' => 'Chiuso', 'format' => 'Formato: HH:MM'],
    'days' => ['monday' => 'Lunedì', 'tuesday' => 'Martedì', 'wednesday' => 'Mercoledì', 'thursday' => 'Giovedì', 'friday' => 'Venerdì', 'saturday' => 'Sabato', 'sunday' => 'Domenica'],
    'periods' => ['morning' => 'Mattino', 'afternoon' => 'Pomeriggio', 'evening' => 'Sera'],
    'labels' => ['morning' => 'Mattino', 'afternoon' => 'Pomeriggio', 'from' => 'Dalle', 'to' => 'Alle', 'closed' => 'Chiuso'],
    'descriptions' => ['day_schedule' => 'Configura gli orari di apertura per questo giorno'],
    'placeholders' => ['morning_hours' => 'Orari del mattino', 'afternoon_hours' => 'Orari del pomeriggio'],
    'notes' => ['format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio]', 'empty_hint' => 'Lasciare vuoto significa "chiuso"'],
<<<<<<< .merge_file_uhqAUU
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_WqYtXE
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8qwq1N
>>>>>>> .merge_file_r8F6zm
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    'validation' => [
        'invalid_format' => 'Formato orario non valido. Utilizzare HH:MM-HH:MM',
        'invalid_time_range' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
        'from_before_to' => 'L\'orario "Dalle" deve essere precedente all\'orario "Alle"',
        'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
        'time_sequence' => 'L\'orario di inizio deve essere precedente a quello di fine',
        'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
        'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.',
        'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.',
        'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
        'morning' => 'mattino',
        'afternoon' => 'pomeriggio',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_uhqAUU
<<<<<<< HEAD
=======
<<<<<<< .merge_file_WqYtXE
<<<<<<< HEAD
=======
<<<<<<< HEAD
        'opening_hours' => ['morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.', 'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.', 'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.', 'opening_before_closing' => 'L\'orario di apertura del :session  :day deve essere precedente a quello di chiusura.', 'morning' => 'mattino', 'afternoon' => 'pomeriggio'],
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r8F6zm
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        'opening_hours' => [
            'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
            'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.',
            'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.',
            'opening_before_closing' => 'L\'orario di apertura del :session  :day deve essere precedente a quello di chiusura.',
            'morning' => 'mattino',
            'afternoon' => 'pomeriggio',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_uhqAUU
=======
        'opening_hours' => ['morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.', 'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.', 'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.', 'opening_before_closing' => 'L\'orario di apertura del :session  :day deve essere precedente a quello di chiusura.', 'morning' => 'mattino', 'afternoon' => 'pomeriggio'],
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
        'opening_hours' => ['morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.', 'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.', 'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.', 'opening_before_closing' => 'L\'orario di apertura del :session  :day deve essere precedente a quello di chiusura.', 'morning' => 'mattino', 'afternoon' => 'pomeriggio'],
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        'opening_hours' => ['morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.', 'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session  :day, devi specificare anche quello di chiusura.', 'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session  :day, devi specificare anche quello di apertura.', 'opening_before_closing' => 'L\'orario di apertura del :session  :day deve essere precedente a quello di chiusura.', 'morning' => 'mattino', 'afternoon' => 'pomeriggio'],
>>>>>>> .merge_file_8qwq1N
>>>>>>> .merge_file_r8F6zm
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    ],
    'label' => 'Opening Hours',
    'plural_label' => 'Opening Hours (Plurale)',
    'navigation' => [
        'name' => 'Opening Hours',
        'plural' => 'Opening Hours',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_uhqAUU
<<<<<<< HEAD
=======
<<<<<<< .merge_file_WqYtXE
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_r8F6zm
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
<<<<<<< HEAD
=======
        'group' => ['name' => 'General', 'description' => 'General Settings'],
>>>>>>> .merge_file_8qwq1N
        'label' => 'Opening Hours',
        'sort' => 1,
        'icon' => 'heroicon-o-rectangle-stack',
    ],
    'fields' => [
        'id' => ['label' => 'Identificativo', 'tooltip' => 'Identificativo univoco del record', 'helper_text' => '', 'description' => ''],
        'created_at' => ['label' => 'Data Creazione', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
        'updated_at' => ['label' => 'Ultima Modifica', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
    ],
    'actions' => [
        'create' => ['label' => 'Crea Opening Hours'],
        'edit' => ['label' => 'Modifica Opening Hours'],
        'delete' => ['label' => 'Elimina Opening Hours'],
    ],
<<<<<<< .merge_file_WqYtXE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        'group' => ['name' => 'General', 'description' => 'General Settings'],
        'label' => 'Opening Hours',
        'sort' => 1,
        'icon' => 'heroicon-o-rectangle-stack',
    ],
    'fields' => [
        'id' => ['label' => 'Identificativo', 'tooltip' => 'Identificativo univoco del record', 'helper_text' => '', 'description' => ''],
        'created_at' => ['label' => 'Data Creazione', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
        'updated_at' => ['label' => 'Ultima Modifica', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
    ],
    'actions' => [
        'create' => ['label' => 'Crea Opening Hours'],
        'edit' => ['label' => 'Modifica Opening Hours'],
        'delete' => ['label' => 'Elimina Opening Hours'],
    ],
<<<<<<< .merge_file_uhqAUU
=======
        'group' => ['name' => 'General', 'description' => 'General Settings'],
        'label' => 'Opening Hours',
        'sort' => 1,
        'icon' => 'heroicon-o-rectangle-stack',
    ],
    'fields' => [
        'id' => ['label' => 'Identificativo', 'tooltip' => 'Identificativo univoco del record', 'helper_text' => '', 'description' => ''],
        'created_at' => ['label' => 'Data Creazione', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
        'updated_at' => ['label' => 'Ultima Modifica', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
    ],
    'actions' => [
        'create' => ['label' => 'Crea Opening Hours'],
        'edit' => ['label' => 'Modifica Opening Hours'],
        'delete' => ['label' => 'Elimina Opening Hours'],
    ],
    'test' => 'opening hours',
>>>>>>> laraxot/dev
=======
    'test' => 'opening hours',
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    'test' => 'opening hours',
>>>>>>> .merge_file_8qwq1N
>>>>>>> .merge_file_r8F6zm
=======
        'label' => 'Opening Hours',
        'sort' => 1,
        'icon' => 'heroicon-o-collection',
    ],
    'fields' => [
        'id' => [
            'label' => 'Identificativo',
            'tooltip' => 'Identificativo univoco del record',
            'helper_text' => '',
            'description' => '',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'tooltip' => '',
            'helper_text' => '',
            'description' => '',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
            'tooltip' => '',
            'helper_text' => '',
            'description' => '',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Opening Hours',
        ],
        'edit' => [
            'label' => 'Modifica Opening Hours',
        ],
        'delete' => [
            'label' => 'Elimina Opening Hours',
        ],
    ],
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
];
