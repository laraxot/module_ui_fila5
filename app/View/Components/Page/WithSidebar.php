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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_1bBIGG
=======
<<<<<<< .merge_file_KXM3xK
>>>>>>> .merge_file_nvRpcZ
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
=======
<<<<<<< .merge_file_1bBIGG
=======
<<<<<<< HEAD
        $viewParams = [];

        return view($view, $viewParams);
=======
<<<<<<< HEAD
        $view_params = [];

        return view($view, $view_params);
=======
>>>>>>> .merge_file_nvRpcZ
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1bBIGG
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $viewParams = [];

        return view($view, $viewParams);
>>>>>>> .merge_file_iTO633
>>>>>>> .merge_file_nvRpcZ
=======
        $view_params = [];

        return view($view, $view_params);
>>>>>>> laraxot/dev
=======
        $view_params = [];

        return view($view, $view_params);
>>>>>>> laraxot/dev
    }
}
