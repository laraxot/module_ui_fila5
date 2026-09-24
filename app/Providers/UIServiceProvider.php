<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Service Provider per il modulo UI.
 *
 * Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
 * per garantire la corretta risoluzione dei path secondo la struttura dei moduli.
 *
<<<<<<< HEAD
<<<<<<< .merge_file_mOdQhK
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md). In questo progetto il modulo Geo non è presente.
 *
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md). In questo progetto il modulo Geo non è presente.
 *
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md). In questo progetto il modulo Geo non è presente.
 *
>>>>>>> .merge_file_AluPX9
=======
>>>>>>> 804451c (Lint)
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class UIServiceProvider extends XotBaseServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public string $name = 'UI';

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
    /**
     * Nome del modulo.
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
    public string $name = 'UI';

>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    /**
<<<<<<< .merge_file_mOdQhK
=======
    /**
>>>>>>> 804451c (Lint)
     * Registra i servizi del provider.
     *
     * Lega i contratti mappa/geocoding ai fallback Null di default. Quando il
     * modulo Geo sarà installato, sostituire il binding qui senza toccare
     * InteractiveMap (vedi docs/wiki/concepts/block-rendering-and-optional-services.md).
     */
    public function register(): void
    {
        parent::register();

        $this->app->singleton(
            \Modules\UI\Contracts\MapServiceContract::class,
<<<<<<< HEAD
<<<<<<< HEAD
            \Modules\UI\Services\Map\NullMapService::class,
        );
        $this->app->singleton(
            \Modules\UI\Contracts\GeocodingServiceContract::class,
            \Modules\UI\Services\Map\NullGeocodingService::class,
=======
=======
>>>>>>> 804451c (Lint)
            \Modules\UI\Adapters\Map\NullMapServiceAdapter::class,
        );
        $this->app->singleton(
            \Modules\UI\Contracts\GeocodingServiceContract::class,
            \Modules\UI\Adapters\Map\NullGeocodingServiceAdapter::class,
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
        );
    }

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
     *
     * @return void
     */

    /**
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AluPX9
     * Restituisce il percorso delle viste dei componenti UI.
     */
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * Restituisce il percorso delle viste dei componenti UI.
     */
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}
