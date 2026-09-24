<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< .merge_file_LTtgOH
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
<<<<<<< HEAD
    public function metatag(string $index): string|bool|null
=======
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
    public function metatag(string $index): string|bool|null
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public function metatag(string $index): string|bool|null
>>>>>>> .merge_file_ISC1he
=======
    public function metatag(string $index): mixed
>>>>>>> 0dadab4 (Lint)
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
<<<<<<< .merge_file_LTtgOH
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
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
>>>>>>> laraxot/dev
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> .merge_file_ISC1he
=======
        return config('metatag.'.$index);
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
            throw new Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
            throw new \Exception('view not exits ['.$view.']');
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> 0dadab4 (Lint)
        }

        return view($view);
    }
}
