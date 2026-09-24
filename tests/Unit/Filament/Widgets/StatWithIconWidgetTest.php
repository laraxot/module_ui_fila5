<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

test('stat with icon widget extends filament widget', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget();
>>>>>>> 0dadab4 (Lint)
    Assert::assertInstanceOf(Widget::class, $widget);
    Assert::assertInstanceOf(XotBaseSchemaWidget::class, $widget);
});

test('stat with icon widget can be instantiated', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget();
>>>>>>> 0dadab4 (Lint)
    Assert::assertInstanceOf(StatWithIconWidget::class, $widget);
});

test('stat with icon widget returns empty form schema', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget();
>>>>>>> 0dadab4 (Lint)
    Assert::assertSame([], $widget->getFormSchema());
});
