<?php

declare(strict_types=1);

<<<<<<< .merge_file_eZn4ID
<<<<<<< HEAD
<<<<<<< .merge_file_FYNprY
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: lang/it/table.php
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qRR9A3
=======
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_k0u8uv
return [
    'columns' => [
        'state_actions' => [
            'label' => 'Azioni Stato',
            'placeholder' => '',
            'helper_text' => 'Azioni disponibili per la transizione di stato',
        ],
    ],
    'label' => 'Table',
    'plural_label' => 'Table (Plurale)',
    'navigation' => [
        'name' => 'Table',
        'plural' => 'Table',
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
        'label' => 'Table',
        'sort' => 1,
<<<<<<< .merge_file_eZn4ID
<<<<<<< HEAD
<<<<<<< .merge_file_FYNprY
<<<<<<< HEAD
        'icon' => 'heroicon-o-collection',
=======
<<<<<<< HEAD
        'icon' => 'heroicon-o-rectangle-stack',
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        'icon' => 'heroicon-o-collection',
=======
        'icon' => 'heroicon-o-rectangle-stack',
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        'icon' => 'heroicon-o-rectangle-stack',
>>>>>>> .merge_file_qRR9A3
=======
>>>>>>> 804451c (Lint)
=======
        'icon' => 'heroicon-o-collection',
>>>>>>> .merge_file_k0u8uv
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
            'label' => 'Crea Table',
        ],
        'edit' => [
            'label' => 'Modifica Table',
        ],
        'delete' => [
            'label' => 'Elimina Table',
        ],
    ],
];
