<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Fixtures;

use Tests\Modules\UI\Support\EnsuresUiDatabaseSchema;
use Tests\Modules\UI\TestCase;

/** PHPStan host for EnsuresUiDatabaseSchema. */
final class EnsuresUiDatabaseSchemaProbe extends TestCase
{
    use EnsuresUiDatabaseSchema;
}
