<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
/**
 * Navbar component.
 */
final class Navbar extends Component
{
    public function __construct()
    {
    }
<<<<<<< HEAD
=======
=======
// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() {}
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }
}
