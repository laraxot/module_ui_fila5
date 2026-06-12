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
            /* @phpstan-ignore-next-line */
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

    public function testIsAUserCalendarWidget(): void
    {
        Assert::assertInstanceOf(UserCalendarWidget::class, self::createTestCalendarWidget());
    }

    public function testReturnsEmptyEventsIfActionClassDoesNotExist(): void
    {
        $widget = self::createTestCalendarWidget();
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

        $events = $widget->fetchEvents($fetchInfo);

        Assert::assertCount(0, $events);
    }

    public function testFallsBackToAMinimalSchemaIfActionDoesNotExist(): void
    {
        $widget = self::createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        Assert::assertCount(2, $formSchema);
        Assert::assertInstanceOf(TextInput::class, $formSchema[0]);
        Assert::assertInstanceOf(Grid::class, $formSchema[1]);
        Assert::assertSame('title', $formSchema[0]->getName());
    }

    public function testFallbackSchemaContainsAGridForDatetimePickers(): void
    {
        $widget = self::createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        $grid = $formSchema[1];
        Assert::assertInstanceOf(Grid::class, $grid);
    }
}
