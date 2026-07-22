<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

final class StatsOverviewWidget extends XotBaseStatsOverviewWidget
=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

final class StatsOverviewWidget extends BaseWidget
>>>>>>> dfac49d (.)
=======
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

final class StatsOverviewWidget extends XotBaseStatsOverviewWidget
>>>>>>> dfbb8305 (.)
{
    protected ?string $heading = 'Stats Overview';
}
