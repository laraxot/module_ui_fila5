<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Unit\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Tests\Modules\UI\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

test('exposes table layout page trait for cross-module consumers', function (): void {
    $page = new class
    {
        use HasTableLayoutPage;
    };

    $page->applyLayoutView(TableLayoutEnum::GRID);

    Assert::assertTrue(HasTableLayoutPage::isLayoutCapable($page));
    Assert::assertSame(TableLayoutEnum::GRID, HasTableLayoutPage::readLayoutFrom($page));

    HasTableLayoutPage::applyLayoutTo($page, TableLayoutEnum::LIST);
    Assert::assertSame(TableLayoutEnum::LIST, HasTableLayoutPage::readLayoutFrom($page));
});
