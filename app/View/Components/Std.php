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
<<<<<<< HEAD
    ) {
    }
=======
    ) {}
>>>>>>> 6e44b7d5 (.)

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
        $view_params = [];

        return view($view, $view_params);
>>>>>>> 6e44b7d5 (.)
    }
}
