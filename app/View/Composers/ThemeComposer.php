<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Exception;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Illuminate\View\View;

final class ThemeComposer
{
    public function metatags(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'ui::metatags';

        return view($view);
    }

    public function metatag(string $index): mixed
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
        return config('metatag.'.$index);
    }

    public function showScripts(): string
    {
        return '';
    }

    public function flag(string $lang): View
    {
        $view = "ui::svg.flags.{$lang}";
        if (! view()->exists($view)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception('view not exits ['.$view.']');
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> dfac49d (.)
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> dfbb8305 (.)
        }

        return view($view);
    }
}
