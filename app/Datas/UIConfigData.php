<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Modules\Xot\Datas\Concerns\MakesFromTenantConfig;
use Spatie\LaravelData\Data;

/** Config tenant per la SettingPage di UI, senza chiavi esposte al form. */
class UIConfigData extends Data
{
    use MakesFromTenantConfig;
}
