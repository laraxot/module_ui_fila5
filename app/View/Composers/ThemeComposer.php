<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_MVvxLP
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
=======
use Exception;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_YSoxbC
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
=======
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
<<<<<<< HEAD
<<<<<<< .merge_file_MVvxLP
<<<<<<< HEAD
    public function metatag(string $index): mixed
=======
    public function metatag(string $index): string|bool|null
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_YSoxbC
=======
    public function metatag(string $index): mixed
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
<<<<<<< .merge_file_MVvxLP
=======
<<<<<<< .merge_file_LTtgOH
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
<<<<<<< HEAD
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
=======
>>>>>>> .merge_file_YSoxbC
<<<<<<< HEAD
        return config('metatag.'.$index);
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_MVvxLP
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $value = config('metatag.'.$index);

        return is_string($value) || is_bool($value) ? $value : null;
>>>>>>> .merge_file_ISC1he
>>>>>>> .merge_file_YSoxbC
=======
        return config('metatag.'.$index);
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
<<<<<<< HEAD
<<<<<<< .merge_file_MVvxLP
=======
            throw new \Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
            throw new Exception('view not exits ['.$view.']');
=======
<<<<<<< HEAD
>>>>>>> .merge_file_YSoxbC
            throw new \Exception('view not exits ['.$view.']');
=======
            throw new Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_MVvxLP
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_YSoxbC
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
=======
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> laraxot/dev
        }

        return view($view);
    }
}
