<?php

declare(strict_types=1);

return [
    'name' => 'UI',
    'description' => 'Modulo per la gestione dell\'interfaccia utente e componenti',
<<<<<<< HEAD
<<<<<<< .merge_file_Iusgpd
<<<<<<< HEAD
    'icon' => 'heroicon-o-squares-2x2',
=======
<<<<<<< HEAD
    'icon' => 'ui-icon',
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
    'icon' => 'heroicon-o-squares-2x2',
=======
    'icon' => 'ui-icon',
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    'icon' => 'ui-icon',
>>>>>>> .merge_file_fKWbd6
=======
>>>>>>> 804451c (Lint)
    'navigation' => [
        'enabled' => true,
        'sort' => 90,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\UI\\Providers\\UIServiceProvider',
    ],
];
