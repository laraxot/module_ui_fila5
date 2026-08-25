<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Enums;

use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

it('has enum values', function (): void {
    Assert::assertSame('list', TableLayoutEnum::LIST->value);
    Assert::assertSame('grid', TableLayoutEnum::GRID->value);
});

it('has default layout', function (): void {
    $default = TableLayoutEnum::init();
<<<<<<< HEAD
   Assert::assertSame(TableLayoutEnum::LIST, $default);
=======
    Assert::assertSame(TableLayoutEnum::LIST, $default);
>>>>>>> laraxot/dev
});

it('toggles between layouts', function (): void {
    $list = TableLayoutEnum::LIST;
    $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
   Assert::assertSame($grid, $list->toggle());
=======
    Assert::assertSame($grid, $list->toggle());
>>>>>>> laraxot/dev
    Assert::assertSame($list, $grid->toggle());
});

it('checks layout types correctly', function (): void {
    $list = TableLayoutEnum::LIST;
    $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
   Assert::assertTrue($list->isListLayout());
=======
    Assert::assertTrue($list->isListLayout());
>>>>>>> laraxot/dev
    Assert::assertFalse($list->isGridLayout());
    Assert::assertTrue($grid->isGridLayout());
    Assert::assertFalse($grid->isListLayout());
});

it('has grid configuration', function (): void {
    $grid = TableLayoutEnum::GRID;
    $config = $grid->getTableContentGrid();

<<<<<<< HEAD
   Assert::assertIsArray($config);
=======
    Assert::assertIsArray($config);
>>>>>>> laraxot/dev
    Assert::assertArrayHasKey('sm', $config);
    Assert::assertArrayHasKey('md', $config);
    Assert::assertArrayHasKey('lg', $config);
    Assert::assertArrayHasKey('xl', $config);
    Assert::assertArrayHasKey('2xl', $config);
});

it('returns correct table columns based on layout', function (): void {
    $list = TableLayoutEnum::LIST;
    $grid = TableLayoutEnum::GRID;

    $listColumns = [
        TextColumn::make('name'),
        TextColumn::make('email'),
    ];

    $gridColumns = [
        Stack::make([
            TextColumn::make('name'),
            TextColumn::make('email'),
        ]),
    ];

    // Test list layout
    $result = $list->getTableColumns($listColumns, $gridColumns);
<<<<<<< HEAD
   Assert::assertSame($listColumns, $result);
=======
    Assert::assertSame($listColumns, $result);
>>>>>>> laraxot/dev
    // Test grid layout
    $result = $grid->getTableColumns($listColumns, $gridColumns);
    Assert::assertSame($gridColumns, $result);
});

it('has options', function (): void {
    $options = TableLayoutEnum::getOptions();

<<<<<<< HEAD
   Assert::assertArrayHasKey('list', $options);
=======
    Assert::assertArrayHasKey('list', $options);
>>>>>>> laraxot/dev
    Assert::assertArrayHasKey('grid', $options);
    Assert::assertIsString($options['list']);
    Assert::assertIsString($options['grid']);
    Assert::assertNotEmpty($options['list']);
    Assert::assertNotEmpty($options['grid']);
});

it('has container classes', function (): void {
    $list = TableLayoutEnum::LIST;
    $grid = TableLayoutEnum::GRID;

    $listClasses = $list->getContainerClasses();
    $gridClasses = $grid->getContainerClasses();

<<<<<<< HEAD
   Assert::assertGreaterThan(0, strlen($listClasses));
=======
    Assert::assertGreaterThan(0, strlen($listClasses));
>>>>>>> laraxot/dev
    Assert::assertGreaterThan(0, strlen($gridClasses));
});
