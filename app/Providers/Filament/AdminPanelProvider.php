<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

// use LaraZeus\Bolt\BoltPlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

    #[\Override]
<<<<<<< .merge_file_nDINWs
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

    #[\Override]
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_D6U7RI
    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);

        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
        /*
         * $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
         * ->defaultLocales(['it', 'en']);
         *
         * $boltPlugin = BoltPlugin::make();
         *
         * $plugins = [
         * $spatieLaravelTranslatablePlugin,
         * $boltPlugin
         * ];
         *
         * $panel->plugins($plugins);
         */
    }
}
