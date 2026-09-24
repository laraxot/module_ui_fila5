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
<<<<<<< .merge_file_yMltC4
=======
<<<<<<< .merge_file_tWROep
=======
<<<<<<< .merge_file_mOdQhK
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_PtPSej
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md).
 *
<<<<<<< .merge_file_yMltC4
=======
=======
>>>>>>> .merge_file_oAto5c
<<<<<<< HEAD
=======
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md). In questo progetto il modulo Geo non è presente.
 *
>>>>>>> laraxot/dev
<<<<<<< .merge_file_tWROep
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
 * Nessun binding Geo/Map/Location: dominio geografico non appartiene a UI
 * (vedi docs/geo-boundary.md). In questo progetto il modulo Geo non è presente.
 *
>>>>>>> .merge_file_AluPX9
>>>>>>> .merge_file_oAto5c
>>>>>>> .merge_file_PtPSej
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class UIServiceProvider extends XotBaseServiceProvider
{
<<<<<<< .merge_file_yMltC4
    public string $name = 'UI';

=======
<<<<<<< HEAD
<<<<<<< .merge_file_tWROep
=======
=======
<<<<<<< HEAD
    public string $name = 'UI';

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_oAto5c
    /**
     * Nome del modulo.
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
     */
<<<<<<< .merge_file_tWROep
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_oAto5c
=======
    public string $name = 'UI';

>>>>>>> laraxot/dev
<<<<<<< .merge_file_tWROep
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_oAto5c
>>>>>>> .merge_file_PtPSej
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< .merge_file_yMltC4
=======
<<<<<<< HEAD
<<<<<<< .merge_file_tWROep
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_oAto5c
    /**
<<<<<<< .merge_file_mOdQhK
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
            \Modules\UI\Services\Map\NullMapService::class,
        );
        $this->app->singleton(
            \Modules\UI\Contracts\GeocodingServiceContract::class,
            \Modules\UI\Services\Map\NullGeocodingService::class,
=======
            \Modules\UI\Adapters\Map\NullMapServiceAdapter::class,
        );
        $this->app->singleton(
            \Modules\UI\Contracts\GeocodingServiceContract::class,
            \Modules\UI\Adapters\Map\NullGeocodingServiceAdapter::class,
>>>>>>> laraxot/dev
        );
    }

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
     *
     * @return void
     */

>>>>>>> .merge_file_PtPSej
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     */
<<<<<<< .merge_file_yMltC4
=======
<<<<<<< .merge_file_tWROep
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_oAto5c
>>>>>>> laraxot/dev
>>>>>>> .merge_file_PtPSej
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}
