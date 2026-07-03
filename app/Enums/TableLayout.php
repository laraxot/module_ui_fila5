<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Modules\Xot\Traits\EnumTrait;
<<<<<<< HEAD

=======
>>>>>>> c001364 (.)
enum TableLayout: string
{
    use EnumTrait;

    case LIST = 'list';
    case GRID = 'grid';

<<<<<<< HEAD
=======

>>>>>>> c001364 (.)
    public function toggle(): self
    {
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
    }
}
