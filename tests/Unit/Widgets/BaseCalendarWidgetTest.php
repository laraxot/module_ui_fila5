<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Modules\UI\Filament\Widgets\UserCalendarWidget;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

function createTestCalendarWidget(): UserCalendarWidget
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

describe('UserCalendarWidget Basics', function (): void {
    it('is a UserCalendarWidget', function (): void {
        Assert::assertInstanceOf(UserCalendarWidget::class, createTestCalendarWidget());
    });
});

describe('UserCalendarWidget Event Management', function (): void {
    it('returns empty events if action class does not exist', function (): void {
        $widget = createTestCalendarWidget();
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

        $events = $widget->fetchEvents($fetchInfo);

        Assert::assertCount(0, $events);
    });
});

describe('UserCalendarWidget Form Schema', function (): void {
    it('falls back to a minimal schema if action does not exist', function (): void {
        $widget = createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        Assert::assertCount(2, $formSchema);
        Assert::assertInstanceOf(TextInput::class, $formSchema[0]);
        Assert::assertInstanceOf(Grid::class, $formSchema[1]);
        Assert::assertSame('title', $formSchema[0]->getName());
    });

    it('fallback schema contains datetime pickers', function (): void {
        $widget = createTestCalendarWidget();
        $formSchema = $widget->getFormSchema();

        $grid = $formSchema[1];
        Assert::assertInstanceOf(Grid::class, $grid);
        $gridSchema = $grid->getChildComponents();
        Assert::assertCount(2, $gridSchema);
        Assert::assertInstanceOf(DateTimePicker::class, $gridSchema[0]);
        Assert::assertInstanceOf(DateTimePicker::class, $gridSchema[1]);
        Assert::assertSame('starts_at', $gridSchema[0]->getName());
        Assert::assertSame('ends_at', $gridSchema[1]->getName());
    });
});
