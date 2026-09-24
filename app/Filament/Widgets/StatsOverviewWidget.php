<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

final class StatsOverviewWidget extends XotBaseStatsOverviewWidget
=======
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget as BaseWidget;

final class StatsOverviewWidget extends BaseWidget
>>>>>>> laraxot/dev
{
    protected ?string $heading = 'Stats Overview';
}
