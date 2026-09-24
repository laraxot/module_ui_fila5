<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Support\RawJs;
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

final class TestChartWidget extends XotBaseChartWidget
=======
<<<<<<< .merge_file_nJ39GH
<<<<<<< HEAD
=======
<<<<<<< .merge_file_QfkNcx
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

final class TestChartWidget extends XotBaseChartWidget
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_X8N9rs
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\File;

final class TestChartWidget extends ChartWidget
<<<<<<< .merge_file_nJ39GH
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_X8N9rs
=======
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

final class TestChartWidget extends XotBaseChartWidget
>>>>>>> laraxot/dev
<<<<<<< .merge_file_nJ39GH
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\Xot\Filament\Widgets\XotBaseChartWidget;

final class TestChartWidget extends XotBaseChartWidget
>>>>>>> .merge_file_ZvFKqt
>>>>>>> .merge_file_X8N9rs
>>>>>>> laraxot/dev
{
    public int $qid = 0;

    public string $max_height = '200px';

    public string $type = 'line';

    // protected static ?string $heading = 'Blog Posts';
    protected ?string $pollingInterval = null;

    // danger, gray, info, primary, success or warning
    protected string $color = 'info';

    public function getDescription(): string
    {
        return 'The number of blog posts published per month.';
    }

    // protected static ?string $maxHeight = '20px';

    protected function getData(): array
    {
        $this->maxHeight = $this->max_height;

        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created '.$this->qid,
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function getOptions(): RawJs
    {
<<<<<<< HEAD
=======
<<<<<<< .merge_file_nJ39GH
<<<<<<< HEAD
=======
<<<<<<< .merge_file_QfkNcx
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_X8N9rs
        $path = module_path('UI', 'resources/js/test-chart-y-tick-options.js');
        $contents = File::exists($path) ? File::get($path) : '{}';

        return RawJs::make($contents);
<<<<<<< .merge_file_nJ39GH
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZvFKqt
>>>>>>> .merge_file_X8N9rs
>>>>>>> laraxot/dev
        return RawJs::make(<<<'JS'
            {
                scales: {
                    y: {
                        ticks: {
                            callback: (value) => '€' + value,
                        },
                    },
                },
            }
        JS);
<<<<<<< HEAD
=======
<<<<<<< .merge_file_nJ39GH
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_QfkNcx
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZvFKqt
>>>>>>> .merge_file_X8N9rs
>>>>>>> laraxot/dev
    }
}
