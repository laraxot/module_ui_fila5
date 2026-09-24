<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

test('row widget extends filament widget', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {};
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
    $widget = new class extends RowWidget {};
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> 0dadab4 (Lint)
    Assert::assertInstanceOf(Widget::class, $widget);
    Assert::assertInstanceOf(XotBaseSchemaWidget::class, $widget);
});

test('row widget can be instantiated via concrete subclass', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {};
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
    $widget = new class extends RowWidget {};
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> 0dadab4 (Lint)
    Assert::assertInstanceOf(RowWidget::class, $widget);
});

test('row widget returns empty form schema', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {};
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
    $widget = new class extends RowWidget {};
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> 0dadab4 (Lint)
    Assert::assertSame([], $widget->getFormSchema());
});

test('row widget exposes grid and widgets arrays', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {};
=======
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
    $widget = new class extends RowWidget {};
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> 0dadab4 (Lint)
    Assert::assertSame([], $widget->grid);
    Assert::assertSame([], $widget->widgets);
});
