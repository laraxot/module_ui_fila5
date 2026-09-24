<?php

declare(strict_types=1);
<<<<<<< .merge_file_jqB5U1
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_FF9SoW
/**
 * @see https://github.com/bezhanSalleh/filament-language-switch/blob/main/src/Http/Livewire/FilamentLanguageSwitch.php
 */

namespace Modules\UI\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Toast extends Component
{
    public function render(): View
    {
        /** @var view-string $view */
        $view = 'ui::livewire.toast';
<<<<<<< .merge_file_jqB5U1
<<<<<<< HEAD
<<<<<<< .merge_file_RFzo3p
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_FF9SoW
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
<<<<<<< .merge_file_jqB5U1
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        $viewParams = [
            'view' => $view,
        ];

        return view($view, $viewParams);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
        $viewParams = [
            'view' => $view,
        ];

        return view($view, $viewParams);
<<<<<<< HEAD
>>>>>>> .merge_file_0dXZFZ
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_FF9SoW
    }
}
