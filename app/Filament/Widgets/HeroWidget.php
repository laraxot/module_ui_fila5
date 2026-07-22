<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

class HeroWidget extends XotBaseStatsOverviewWidget
=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
>>>>>>> dfac49d (.)
{
    protected ?string $heading = 'Hero Widget';

    protected string $title = '';

    protected string $icon = '';

    public function getColumns(): int
    {
        return 8;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('', $this->title)->icon($this->icon),
        ];
    }
}
