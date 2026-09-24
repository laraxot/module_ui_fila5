<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

test('exposes table layout page trait for cross-module consumers', function (): void {
<<<<<<< .merge_file_I1zsu3
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_3tyfNQ
    $page = new class {
        use HasTableLayoutPage;

<<<<<<< .merge_file_I1zsu3
<<<<<<< .merge_file_GNy8c1
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
    $page = new class {
        use HasTableLayoutPage;

        public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;
    };

=======
>>>>>>> 804451c (Lint)
    $page = new class
    {
        use HasTableLayoutPage;
    };

    $page->applyLayoutView(TableLayoutEnum::GRID);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    $page->applyLayoutView(TableLayoutEnum::GRID);

>>>>>>> .merge_file_2bq0Tb
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
        public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;
    };

>>>>>>> .merge_file_3tyfNQ
    Assert::assertTrue(HasTableLayoutPage::isLayoutCapable($page));
    Assert::assertSame(TableLayoutEnum::GRID, HasTableLayoutPage::readLayoutFrom($page));

    HasTableLayoutPage::applyLayoutTo($page, TableLayoutEnum::LIST);
    Assert::assertSame(TableLayoutEnum::LIST, HasTableLayoutPage::readLayoutFrom($page));
});
