<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

use Exception;
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

<<<<<<< HEAD
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
    public function metatag(string $index): string|bool|null
>>>>>>> laraxot/dev
=======
    public function metatag(string $index): mixed
>>>>>>> laraxot/dev
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> laraxot/dev
=======
        return config('metatag.'.$index);
>>>>>>> laraxot/dev
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
>>>>>>> laraxot/dev
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
        }

        return view($view);
    }
}
