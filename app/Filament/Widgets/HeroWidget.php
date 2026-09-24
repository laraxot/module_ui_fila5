<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_e5HN3p
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
=======
>>>>>>> .merge_file_lKEpGh
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

<<<<<<< .merge_file_e5HN3p
class HeroWidget extends BaseWidget
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

class HeroWidget extends XotBaseStatsOverviewWidget
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
class HeroWidget extends XotBaseStatsOverviewWidget
>>>>>>> .merge_file_lKEpGh
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
