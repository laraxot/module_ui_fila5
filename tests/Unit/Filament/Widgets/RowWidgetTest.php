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
    $widget = new class extends RowWidget {
    };
<<<<<<< .merge_file_95KcTU
=======
<<<<<<< HEAD
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
=======
    $widget = new class extends RowWidget {};
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_MwwqDo
    Assert::assertInstanceOf(Widget::class, $widget);
    Assert::assertInstanceOf(XotBaseSchemaWidget::class, $widget);
});

test('row widget can be instantiated via concrete subclass', function (): void {
<<<<<<< .merge_file_95KcTU
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
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
=======
    $widget = new class extends RowWidget {};
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> .merge_file_MwwqDo
    Assert::assertInstanceOf(RowWidget::class, $widget);
});

test('row widget returns empty form schema', function (): void {
    $widget = new class extends RowWidget {
    };
<<<<<<< .merge_file_95KcTU
=======
<<<<<<< HEAD
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
=======
    $widget = new class extends RowWidget {};
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_MwwqDo
    Assert::assertSame([], $widget->getFormSchema());
});

test('row widget exposes grid and widgets arrays', function (): void {
<<<<<<< .merge_file_95KcTU
<<<<<<< HEAD
    $widget = new class extends RowWidget {
    };
=======
<<<<<<< HEAD
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
=======
    $widget = new class extends RowWidget {};
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
    $widget = new class extends RowWidget {
    };
>>>>>>> .merge_file_MwwqDo
    Assert::assertSame([], $widget->grid);
    Assert::assertSame([], $widget->widgets);
});
