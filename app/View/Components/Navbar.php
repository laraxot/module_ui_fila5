<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

<<<<<<< HEAD
=======
<<<<<<< .merge_file_voWOw8
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Mx5aGh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZIPEc0
// use Modules\Xot\View\Components\XotBaseComponent;

=======
>>>>>>> .merge_file_xQs5Og
>>>>>>> laraxot/dev
/**
 * Navbar component.
 */
final class Navbar extends Component
{
<<<<<<< HEAD
    public function __construct() {}
=======
<<<<<<< .merge_file_Mx5aGh
    /**
     * Create a new component instance.
     */
<<<<<<< .merge_file_voWOw8
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZIPEc0
/**
 * Navbar component.
 */
final class Navbar extends Component
{
<<<<<<< .merge_file_voWOw8
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_xQs5Og
>>>>>>> .merge_file_ZIPEc0
    public function __construct()
    {
    }
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
<<<<<<< .merge_file_voWOw8
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Mx5aGh
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZIPEc0
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
<<<<<<< .merge_file_voWOw8
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZIPEc0
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_voWOw8
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> .merge_file_xQs5Og
>>>>>>> .merge_file_ZIPEc0
>>>>>>> laraxot/dev
    }
}
