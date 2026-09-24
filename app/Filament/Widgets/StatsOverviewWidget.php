<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

final class StatsOverviewWidget extends BaseWidget
=======
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

final class StatsOverviewWidget extends XotBaseStatsOverviewWidget
>>>>>>> laraxot/dev
=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

final class StatsOverviewWidget extends BaseWidget
>>>>>>> laraxot/dev
{
    protected ?string $heading = 'Stats Overview';
}
