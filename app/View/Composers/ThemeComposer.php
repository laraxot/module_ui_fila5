<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
    public function metatag(string $index): string|bool|null
=======
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
    public function metatag(string $index): string|bool|null
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
=======
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> laraxot/dev
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
            throw new Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
            throw new \Exception('view not exits ['.$view.']');
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        }

        return view($view);
    }
}
