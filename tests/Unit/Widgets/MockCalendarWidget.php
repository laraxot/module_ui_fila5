<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
<<<<<<< HEAD
use Modules\UI\Tests\Unit\Widgets\Fixtures\BaseCalendarWidgetStub;
=======
<<<<<<< HEAD
use Modules\UI\Tests\Unit\Widgets\Fixtures\BaseCalendarWidgetStub;
=======
use Modules\UI\Filament\Widgets\BaseCalendarWidget;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev

/**
 * Widget di supporto per i test del BaseCalendarWidget.
 */
<<<<<<< HEAD
class MockCalendarWidget extends BaseCalendarWidgetStub
=======
<<<<<<< HEAD
class MockCalendarWidget extends BaseCalendarWidgetStub
=======
class MockCalendarWidget extends BaseCalendarWidget
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
{
    public string $model = MockEventModel::class;

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $fetchInfo
     *
=======
<<<<<<< HEAD
     * @param array<string, mixed> $fetchInfo
     *
=======
     * @param  array<string, mixed>  $fetchInfo
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
     * @return array<int, array{id:int, title:string, start:string, end:string, color:string}>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        unset($fetchInfo);

        return [
            [
                'id' => 1,
                'title' => 'Test Event 1',
                'start' => '2025-01-01T10:00:00',
                'end' => '2025-01-01T12:00:00',
                'color' => '#3B82F6',
            ],
            [
                'id' => 2,
                'title' => 'Test Event 2',
                'start' => '2025-01-02T14:00:00',
                'end' => '2025-01-02T16:00:00',
                'color' => '#10B981',
            ],
        ];
    }

    /**
     * @return array<int, Component>
     */
    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            DateTimePicker::make('start')->required(),
            DateTimePicker::make('end')->required(),
        ];
    }
}
