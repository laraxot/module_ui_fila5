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
<<<<<<< .merge_file_kt07Za
        $this->widget = new DarkModeSwitcherWidget();
<<<<<<< HEAD
=======
        $this->widget = new DarkModeSwitcherWidget();
>>>>>>> 804451c (Lint)
=======
        $this->widget = new DarkModeSwitcherWidget;
        $this->widget = new DarkModeSwitcherWidget;
>>>>>>> .merge_file_aRkmAL
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
        if (! DarkModeSwitcherWidget::canView()) {
            /** @var view-string $viewName */
            $viewName = 'ui::components.empty';

            return view($viewName);
        }

        // Ottiene i dati dal widget
        $viewData = ['darkMode' => $this->widget->darkMode];
        /** @var view-string $viewName */
        $viewName = 'ui::filament.widgets.dark-mode-switcher';

        return view($viewName, $viewData);
    }
}
