<?php

declare(strict_types=1);

return [
    'fields' => [
        'text' => [
            'label' => 'Testo',
            'description' => 'text',
            'placeholder' => 'text',
            'helper_text' => '',
            'tooltip' => '',
        ],
        'level' => [
            'label' => 'Grandezza',
            'description' => 'level',
            'helper_text' => '',
            'placeholder' => 'level',
            'tooltip' => '',
        ],
        '_tpl' => [
            'label' => '_tpl',
            'tooltip' => '',
            'helper_text' => '',
            'description' => '',
        ],
        'view' => [
            'label' => 'view',
            'description' => 'view',
            'helper_text' => '',
            'placeholder' => 'view',
            'tooltip' => '',
        ],
    ],
    'label' => 'Title',
    'plural_label' => 'Title (Plurale)',
    'navigation' => [
        'name' => 'Title',
        'plural' => 'Title',
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
        'label' => 'Title',
        'sort' => 1,
        'icon' => 'heroicon-o-rectangle-stack',
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Title',
        ],
        'edit' => [
            'label' => 'Modifica Title',
        ],
        'delete' => [
            'label' => 'Elimina Title',
        ],
    ],
];
