<?php

declare(strict_types=1);

<<<<<<< .merge_file_dMq2R9
<<<<<<< HEAD
=======
<<<<<<< .merge_file_OA6GcF
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_osMRjm
// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: lang/it/validation.php
<<<<<<< .merge_file_dMq2R9
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OBpmNN
>>>>>>> .merge_file_osMRjm
return [
    'opening_hours' => [
        'morning' => 'mattino',
        'afternoon' => 'pomeriggio',
        'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
        'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session per :day, devi specificare anche quello di chiusura.',
        'missing_opening_time' => 'Se specifichi l\'orario di chiusura del :session per :day, devi specificare anche quello di apertura.',
        'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
    ],
    'label' => 'Validation',
    'plural_label' => 'Validation (Plurale)',
    'navigation' => [
        'name' => 'Validation',
        'plural' => 'Validation',
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
        'label' => 'Validation',
        'sort' => 1,
<<<<<<< .merge_file_dMq2R9
<<<<<<< HEAD
        'icon' => 'heroicon-o-collection',
=======
        'icon' => 'heroicon-o-rectangle-stack',
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_OA6GcF
<<<<<<< HEAD
        'icon' => 'heroicon-o-collection',
=======
<<<<<<< HEAD
        'icon' => 'heroicon-o-rectangle-stack',
=======
<<<<<<< HEAD
        'icon' => 'heroicon-o-collection',
=======
        'icon' => 'heroicon-o-rectangle-stack',
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        'icon' => 'heroicon-o-rectangle-stack',
>>>>>>> .merge_file_OBpmNN
>>>>>>> .merge_file_osMRjm
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
            'label' => 'Crea Validation',
        ],
        'edit' => [
            'label' => 'Modifica Validation',
        ],
        'delete' => [
            'label' => 'Elimina Validation',
        ],
    ],
];
