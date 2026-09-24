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
    $widget = new StatWithIconWidget();
<<<<<<< .merge_file_1SzIvN
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_FeVAZJ
    Assert::assertInstanceOf(Widget::class, $widget);
    Assert::assertInstanceOf(XotBaseSchemaWidget::class, $widget);
});

test('stat with icon widget can be instantiated', function (): void {
<<<<<<< .merge_file_1SzIvN
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget();
>>>>>>> .merge_file_FeVAZJ
    Assert::assertInstanceOf(StatWithIconWidget::class, $widget);
});

test('stat with icon widget returns empty form schema', function (): void {
<<<<<<< .merge_file_1SzIvN
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatWithIconWidget;
=======
<<<<<<< HEAD
    $widget = new StatWithIconWidget();
=======
    $widget = new StatWithIconWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget;
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
    $widget = new StatWithIconWidget();
>>>>>>> .merge_file_FeVAZJ
    Assert::assertSame([], $widget->getFormSchema());
});
