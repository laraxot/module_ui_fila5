<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
/**
 * @see https://filamentphp.com/docs/3.x/forms/fields/types
 * @see https://github.com/Valourite/form-builder/blob/v1.x/src/Filament/Enums/FieldType.php
 */

namespace Modules\UI\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Traits\EnumTrait;

/**
<<<<<<< HEAD
<<<<<<< .merge_file_PhCfas
=======
<<<<<<< .merge_file_k4aE4q
<<<<<<< HEAD
 * Filament form field types supported by the UI module.
=======
<<<<<<< HEAD
 * Defines the different types of appointments in the system.
=======
>>>>>>> .merge_file_yndxKC
<<<<<<< HEAD
 * Filament form field types supported by the UI module.
=======
 * Defines the different types of appointments in the system.
>>>>>>> laraxot/dev
<<<<<<< .merge_file_PhCfas
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
 * Defines the different types of appointments in the system.
>>>>>>> .merge_file_qCIK1o
>>>>>>> .merge_file_yndxKC
=======
 * Defines the different types of appointments in the system.
>>>>>>> laraxot/dev
 *
 * @method static self        fromName(string $name)
 * @method static self        fromValue(string $value)
 * @method static self        tryFromName(string $name)
 * @method static self        tryFromValue(string $value)
 * @method static array<self> cases()
 */
enum FieldTypeEnum: string implements HasColor, HasIcon, HasLabel
{
    use EnumTrait;

    case TEXT = 'text';
    // case NUMBER   = 'number';
    case EMAIL = 'email';
<<<<<<< HEAD
<<<<<<< .merge_file_PhCfas
=======
<<<<<<< .merge_file_k4aE4q
<<<<<<< HEAD
=======
<<<<<<< HEAD
    // case PASSWORD = 'password';
=======
>>>>>>> .merge_file_yndxKC
<<<<<<< HEAD
=======
    // case PASSWORD = 'password';
>>>>>>> laraxot/dev
<<<<<<< .merge_file_PhCfas
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    // case PASSWORD = 'password';
>>>>>>> .merge_file_qCIK1o
>>>>>>> .merge_file_yndxKC
=======
    // case PASSWORD = 'password';
>>>>>>> laraxot/dev
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE = 'date';
    case TIME = 'time';
    case DATETIME = 'datetime';
}
