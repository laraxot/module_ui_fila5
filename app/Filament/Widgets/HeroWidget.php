<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

class HeroWidget extends XotBaseStatsOverviewWidget
{
    protected ?string $heading = 'Hero Widget';

=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
{
    protected ?string $heading = 'Hero Widget';

    // PHPStan L10: Protected per type safety - public properties sono viste come mixed
>>>>>>> 6e44b7d5 (.)
    protected string $title = '';

    protected string $icon = '';

    public function getColumns(): int
    {
        return 8;
    }

    protected function getStats(): array
    {
        return [
<<<<<<< HEAD
            Stat::make('', $this->title)->icon($this->icon),
=======
            Stat::make('', $this->title ?? '')->icon($this->icon ?? ''),
>>>>>>> 6e44b7d5 (.)
        ];
    }
}
