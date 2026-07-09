<?php

declare(strict_types=1);

// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: resources/lang/it/ui.php
return [
    'actions' => [
        'table_layout_toggle' => [
            'label' => 'Cambia Layout',
            'tooltip' => 'Cambia il layout della tabella',
        ],
    ],
    'blocks' => [
        'navigation' => [
            'items' => [
                'label' => 'Voci di navigazione',
                'help' => 'Le voci di navigazione da mostrare',
            ],
            'link_text' => [
                'label' => 'Testo link',
                'help' => 'Il testo del link',
            ],
            'link_url' => [
                'label' => 'URL link',
                'help' => 'L\'URL del link',
            ],
        ],
        'slider' => [
            'layout' => [
                'label' => 'Layout',
                'help' => 'Il layout dello slider',
            ],
        ],
    ],
];
