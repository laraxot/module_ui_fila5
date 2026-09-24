<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Page;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

final class WithSidebar extends Component
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

<<<<<<< .merge_file_qcjclv
<<<<<<< HEAD
<<<<<<< .merge_file_KXM3xK
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
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
>>>>>>> .merge_file_iTO633
=======
>>>>>>> 804451c (Lint)
=======
        $view_params = [];

        return view($view, $view_params);
>>>>>>> .merge_file_I7yisY
    }
}
