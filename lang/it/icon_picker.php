<?php

declare(strict_types=1);

// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: lang/it/icon_picker.php
return [
    'fields' => [
        'newstate' => [
            'label' => 'newstate',
            'tooltip' => '',
            'helper_text' => '',
            'description' => '',
        ],
        'pack' => [
            'label' => 'pack',
            'description' => 'pack',
            'helper_text' => 'pack',
            'placeholder' => 'pack',
            'tooltip' => '',
        ],
        'icon' => [
            'label' => 'icon',
            'tooltip' => '',
            'helper_text' => '',
            'description' => '',
        ],
    ],
    'label' => 'Icon Picker',
    'plural_label' => 'Icon Picker (Plurale)',
    'navigation' => [
        'name' => 'Icon Picker',
        'plural' => 'Icon Picker',
        'group' => [
            'name' => 'General',
            'description' => 'General Settings',
        ],
        'label' => 'Icon Picker',
        'sort' => 1,
        'icon' => 'heroicon-o-collection',
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Icon Picker',
        ],
        'edit' => [
            'label' => 'Modifica Icon Picker',
        ],
        'delete' => [
            'label' => 'Elimina Icon Picker',
        ],
    ],
];
