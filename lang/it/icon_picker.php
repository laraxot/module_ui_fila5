<?php

declare(strict_types=1);

<<<<<<< HEAD
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
=======
return [
    'fields' => [
        'newstate' => ['label' => 'newstate', 'tooltip' => '', 'helper_text' => '', 'description' => '', 'placeholder' => 'newstate'],
        'pack' => ['label' => 'pack', 'description' => 'pack', 'helper_text' => 'pack', 'placeholder' => 'pack', 'tooltip' => ''],
        'icon' => ['label' => 'icon', 'tooltip' => '', 'helper_text' => '', 'description' => ''],
>>>>>>> laraxot/dev
    ],
    'label' => 'Icon Picker',
    'plural_label' => 'Icon Picker (Plurale)',
    'navigation' => [
        'name' => 'Icon Picker',
        'plural' => 'Icon Picker',
<<<<<<< HEAD
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
=======
        'group' => ['name' => 'General', 'description' => 'General Settings'],
        'label' => 'Icon Picker',
        'sort' => 1,
        'icon' => 'heroicon-o-rectangle-stack',
    ],
    'actions' => [
        'create' => ['label' => 'Crea Icon Picker'],
        'edit' => ['label' => 'Modifica Icon Picker'],
        'delete' => ['label' => 'Elimina Icon Picker'],
        'icon' => ['label' => 'icon', 'icon' => 'icon', 'tooltip' => 'icon'],
>>>>>>> laraxot/dev
    ],
];
