<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_2Wb5HM
<<<<<<< HEAD
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
=======
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget as BaseWidget;
>>>>>>> .merge_file_FKnAM9
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
<<<<<<< .merge_file_2Wb5HM
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
=======
>>>>>>> 804451c (Lint)
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;

class HeroWidget extends XotBaseStatsOverviewWidget
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
class HeroWidget extends XotBaseStatsOverviewWidget
>>>>>>> .merge_file_lKEpGh
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_FKnAM9
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
