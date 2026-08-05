<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

final class StatsOverviewWidget extends XotBaseStatsOverviewWidget
=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

final class StatsOverviewWidget extends BaseWidget
>>>>>>> 6e44b7d5 (.)
{
    protected ?string $heading = 'Stats Overview';
}
