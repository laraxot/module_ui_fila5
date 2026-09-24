<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< .merge_file_h7Pgm8
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Exception;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_3kYmcS
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

<<<<<<< .merge_file_h7Pgm8
<<<<<<< HEAD
<<<<<<< .merge_file_LTtgOH
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
<<<<<<< HEAD
    public function metatag(string $index): string|bool|null
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
    public function metatag(string $index): string|bool|null
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public function metatag(string $index): string|bool|null
>>>>>>> .merge_file_ISC1he
=======
>>>>>>> 804451c (Lint)
=======
    public function metatag(string $index): mixed
>>>>>>> .merge_file_3kYmcS
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< .merge_file_h7Pgm8
<<<<<<< HEAD
<<<<<<< .merge_file_LTtgOH
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
<<<<<<< HEAD
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> .merge_file_ISC1he
=======
>>>>>>> 804451c (Lint)
=======
        return config('metatag.'.$index);
>>>>>>> .merge_file_3kYmcS
    }

    public function showScripts(): string
    {
        return '';
    }

    public function flag(string $lang): View
    {
        $view = "ui::svg.flags.{$lang}";
        if (! view()->exists($view)) {
<<<<<<< .merge_file_h7Pgm8
<<<<<<< HEAD
            throw new \Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
            throw new \Exception('view not exits ['.$view.']');
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> .merge_file_3kYmcS
        }

        return view($view);
    }
}
