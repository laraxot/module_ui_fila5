<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Modules\Xot\Traits\EnumTrait;

enum TableLayout: string
{
    use EnumTrait;

    case LIST = 'list';
    case GRID = 'grid';

    public function toggle(): self
    {
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
    }
<<<<<<< HEAD
<<<<<<< .merge_file_DplzmV
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Da0InY
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

    /**
     * @return array<string, string>
     */
    public static function toArray(): array
    {
        $result = [];
        foreach (self::cases() as $case) {
            $result[$case->value] = $case->name;
        }

        return $result;
    }
<<<<<<< HEAD
<<<<<<< .merge_file_DplzmV
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Da0InY
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
}
