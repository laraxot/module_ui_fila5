<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
=======
use Modules\UI\Adapters\Location\NullLocationDataProviderAdapter;
use Modules\UI\Contracts\LocationDataProviderContract;
>>>>>>> dfbb8305 (.)
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Service Provider per il modulo UI.
 *
 * Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
 * per garantire la corretta risoluzione dei path secondo la struttura dei moduli.
 *
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    /**
     * Nome del modulo.
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
     */
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
<<<<<<< HEAD
=======
     * Registra il binding di default (null-object) per LocationDataProviderContract.
     *
     * Un modulo esterno (es. Geo) può sovrascrivere questo binding registrando
     * la propria implementazione concreta nel container.
     */
    public function register(): void
    {
        parent::register();

        $this->app->bindIf(LocationDataProviderContract::class, NullLocationDataProviderAdapter::class);
    }

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
     *
     * @return void
     */

    /**
     * Registra i servizi del provider.
     *
     * @return void
     */

    /**
>>>>>>> dfbb8305 (.)
     * Restituisce il percorso delle viste dei componenti UI.
     */
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}
