<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
    'values' => [
        'list' => [
            'label' => 'Elenco',
            'icon' => 'heroicon-o-list-bullet',
            'color' => 'primary',
            'description' => 'Elenco',
        ],
        'grid' => [
            'label' => 'Griglia',
            'icon' => 'heroicon-o-squares-2x2',
            'color' => 'secondary',
            'description' => 'Griglia',
        ],
    ],
    'actions' => [
        'toggle' => [
            'label' => 'Cambia Layout!!',
<<<<<<< HEAD
=======
    'actions' => [
        'toggle' => [
            'label' => 'Cambia Layout',
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
            'tooltip' => 'Passa da vista a elenco a vista a griglia',
            'helper_text' => 'Cambia il tipo di visualizzazione',
        ],
    ],
    'label' => 'Table Layout',
    'plural_label' => 'Table Layout (Plurale)',
    'navigation' => [
        'name' => 'Table Layout',
        'plural' => 'Table Layout',
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
        'label' => 'Table Layout',
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
];
