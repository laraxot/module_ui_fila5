<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Std extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $tpl = '',
    ) {
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

<<<<<<< .merge_file_Ez2SeL
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> .merge_file_zChN0o
    }
}
