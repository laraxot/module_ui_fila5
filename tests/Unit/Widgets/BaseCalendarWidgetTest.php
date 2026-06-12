<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Widgets;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Modules\Lang\Actions\SaveTransAction;
use Modules\UI\Filament\Widgets\UserCalendarWidget;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

final class BaseCalendarWidgetTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->mock(SaveTransAction::class, function ($mock): void {
            /** @phpstan-ignore-next-line */
            $mock->shouldReceive('execute')->andReturnNull();
        });
    }

    private static function createTestCalendarWidget(): UserCalendarWidget
    {
        $widget = new class extends UserCalendarWidget {
            public function getActionName(string $function): string
            {
                unset($function);

                return 'Modules\\UI\\Tests\\Unit\\Widgets\\NonExistingAction';
            }
        };
        $widget->type = 'test';

        return $widget;
    }

    public function test_is_a_user_calendar_widget(): void
    {
        Assert::assertInstanceOf(UserCalendarWidget::class, self::createTestCalendarWidget());
    }

    public function test_returns_empty_events_if_action_class_does_not_exist(): void
    {
        $widget = self::createTestCalendarWidget();
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

        $events = $widget->fetchEvents($fetchInfo);

        Assert::assertCount(0, $events);
    }

    public function test_falls_back_to_a_minimal_schema_if_action_does_not_exist(): void
    {
        $widget = self::createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        Assert::assertCount(2, $formSchema);
        Assert::assertInstanceOf(TextInput::class, $formSchema[0]);
        Assert::assertInstanceOf(Grid::class, $formSchema[1]);
        Assert::assertSame('title', $formSchema[0]->getName());
    }

    public function test_fallback_schema_contains_a_grid_for_datetime_pickers(): void
    {
        $widget = self::createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        $grid = $formSchema[1];
        Assert::assertInstanceOf(Grid::class, $grid);
    }
}
