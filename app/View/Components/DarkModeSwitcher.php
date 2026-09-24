<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;

/**
 * Componente Blade per il Dark Mode Switcher.
 *
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 */
final class DarkModeSwitcher extends Component
{
    /**
     * Widget associato al componente.
     */
    protected DarkModeSwitcherWidget $widget;

    /**
     * Crea una nuova istanza del componente.
     */
    public function __construct()
    {
        $this->widget = new DarkModeSwitcherWidget();
<<<<<<< HEAD
=======
        $this->widget = new DarkModeSwitcherWidget();
>>>>>>> 0dadab4 (Lint)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
        if (! DarkModeSwitcherWidget::canView()) {
<<<<<<< HEAD
            return view('ui::components.empty');
=======
            /** @phpstan-var view-string */
            $viewName = 'ui::components.empty';

            return view($viewName);
>>>>>>> 0dadab4 (Lint)
        }

        // Ottiene i dati dal widget
        $viewData = ['darkMode' => $this->widget->darkMode];
<<<<<<< HEAD

        return view('ui::filament.widgets.dark-mode-switcher', $viewData);
=======
        /** @phpstan-var view-string */
        $viewName = 'ui::filament.widgets.dark-mode-switcher';

        return view($viewName, $viewData);
>>>>>>> 0dadab4 (Lint)
    }
}
