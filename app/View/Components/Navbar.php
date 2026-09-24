<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

<<<<<<< HEAD
// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
=======
/**
 * Navbar component.
 */
final class Navbar extends Component
{
>>>>>>> laraxot/dev
    public function __construct()
    {
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
<<<<<<< HEAD
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> laraxot/dev
    }
}
