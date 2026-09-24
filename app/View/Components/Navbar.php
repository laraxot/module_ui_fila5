<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

<<<<<<< .merge_file_Lw5gME
<<<<<<< HEAD
<<<<<<< .merge_file_Mx5aGh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0LQq2X
// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< .merge_file_Lw5gME
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> 804451c (Lint)
/**
 * Navbar component.
 */
final class Navbar extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_xQs5Og
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0LQq2X
    public function __construct()
    {
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
<<<<<<< .merge_file_Lw5gME
<<<<<<< HEAD
<<<<<<< .merge_file_Mx5aGh
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0LQq2X
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
<<<<<<< .merge_file_Lw5gME
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> .merge_file_xQs5Og
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0LQq2X
    }
}
