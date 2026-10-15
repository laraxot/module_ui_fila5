<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
use Tests\Modules\UI\TestCase;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

test('row widget extends filament widget', function (): void {
    $widget = new class extends RowWidget {};
    Assert::assertInstanceOf(Widget::class, $widget);
    Assert::assertInstanceOf(XotBaseSchemaWidget::class, $widget);
});

test('row widget can be instantiated via concrete subclass', function (): void {
    $widget = new class extends RowWidget {};
    Assert::assertInstanceOf(RowWidget::class, $widget);
});

test('row widget returns empty form schema', function (): void {
    $widget = new class extends RowWidget {};
    Assert::assertSame([], $widget->getFormSchema());
});

test('row widget exposes grid and widgets arrays', function (): void {
    $widget = new class extends RowWidget {};
    Assert::assertSame([], $widget->grid);
    Assert::assertSame([], $widget->widgets);
});
