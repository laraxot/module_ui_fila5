<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Unit;

/**
 * Unit-only enum fixture (non backed) — used to assert validateEnumClass rejects plain enums.
 */
enum TestPureUnitEnum
{
    case A;
}
