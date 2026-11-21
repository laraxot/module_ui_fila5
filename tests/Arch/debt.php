<?php

declare(strict_types=1);

/*
 * Debito di architettura di Modules\UI: classi che oggi violano una regola di Modules/Xot/tests/Arch/ArchitectureTest.php.
 * Misurato il 2026-11-18. Solo in discesa: chi corregge una classe la toglie, chi aggiunge una voce lo spiega nella PR.
 * Ogni voce deve stare nel namespace di questo pacchetto (lo verifica ArchitectureTest).

 * ADR: Modules/Xot/docs/adr/architecture-tests-pest-arch.md
 */

return [
    // classi in un namespace Services (regola No Services, DCP-270); NoServicesTest le vede come cartelle
<<<<<<< .merge_file_u5K5JY
    //
    // Vuota dal 2026-11-20 (base_quaeris_fila5#247). `ThemeService` e
    // `ComponentService` erano classi **vuote**: docblock e `{}`, zero metodi.
    // `UIService::asset()` era letteralmente
    // `return app(AssetAction::class)->execute($asset);`. I due `Map/Null*Service`
    // erano copie carattere per carattere di `Adapters/Map/Null*ServiceAdapter`, e
    // nessuno dei quattro e' legato al container: non erano null object attivi.
    'services' => [],
=======
    'services' => [
        'Modules\UI\Services\ComponentService',
        'Modules\UI\Services\Map\NullGeocodingService',
        'Modules\UI\Services\Map\NullMapService',
        'Modules\UI\Services\ThemeService',
        'Modules\UI\Services\UIService',
    ],
>>>>>>> .merge_file_LypKeZ
];
