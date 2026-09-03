<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(\Modules\UI\Tests\TestCase::class);

test('exposes table layout page trait for cross-module consumers', function (): void {
<<<<<<< .merge_file_0rlgf3
    $page = new class()
    {
=======
    $page = new class {
>>>>>>> .merge_file_fx7wgF
        use HasTableLayoutPage;
    };

    $page->applyLayoutView(TableLayoutEnum::GRID);

    Assert::assertTrue(HasTableLayoutPage::isLayoutCapable($page));
    Assert::assertSame(TableLayoutEnum::GRID, HasTableLayoutPage::readLayoutFrom($page));

    HasTableLayoutPage::applyLayoutTo($page, TableLayoutEnum::LIST);
    Assert::assertSame(TableLayoutEnum::LIST, HasTableLayoutPage::readLayoutFrom($page));
});
