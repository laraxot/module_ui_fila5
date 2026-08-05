<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component as ViewComponent;

class Simple extends ViewComponent
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
    public function __construct()
    {
    }
=======
    public function __construct() {}
>>>>>>> 6e44b7d5 (.)

    public function render(): View
    {
        /**
         * @phpstan-var view-string $view
         */
        $view = 'ui::components.blocks.hero.simple';

        return view($view);
    }
}
