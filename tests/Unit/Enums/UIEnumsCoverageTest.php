<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\UI\Enums\CornerPositionEnum;
use Modules\UI\Enums\FieldTypeEnum;
use Modules\UI\Enums\TableLayout;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);
<<<<<<< .merge_file_7AKEqK
<<<<<<< HEAD
<<<<<<< .merge_file_7GNX1X
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0heBNv
=======
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_pLgSyY

// --- CornerPositionEnum ---

it('CornerPositionEnum has correct values', function (): void {
    Assert::assertSame('top-left', CornerPositionEnum::TOP_LEFT->value);
    Assert::assertSame('top-right', CornerPositionEnum::TOP_RIGHT->value);
    Assert::assertSame('bottom-left', CornerPositionEnum::BOTTOM_LEFT->value);
    Assert::assertSame('bottom-right', CornerPositionEnum::BOTTOM_RIGHT->value);
});

<<<<<<< .merge_file_7AKEqK
<<<<<<< HEAD
<<<<<<< .merge_file_7GNX1X
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_pLgSyY
it('CornerPositionEnum getColor returns translation keys via EnumTrait', function (): void {
    foreach (CornerPositionEnum::cases() as $case) {
        Assert::assertStringContainsString('ui::corner_position_enum.values.', $case->getColor());
        Assert::assertStringEndsWith('.color', $case->getColor());
    }
});

<<<<<<< .merge_file_7AKEqK
<<<<<<< .merge_file_7GNX1X
=======
<<<<<<< HEAD
it('CornerPositionEnum getColor returns translation keys via EnumTrait', function (): void {
    foreach (CornerPositionEnum::cases() as $case) {
        Assert::assertStringContainsString('ui::corner_position_enum.values.', $case->getColor());
        Assert::assertStringEndsWith('.color', $case->getColor());
    }
});

>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_pLgSyY
it('CornerPositionEnum getIcon returns translation keys via EnumTrait', function (): void {
    Assert::assertSame('ui::corner_position_enum.values.top-left.icon', CornerPositionEnum::TOP_LEFT->getIcon());
    Assert::assertSame('ui::corner_position_enum.values.top-right.icon', CornerPositionEnum::TOP_RIGHT->getIcon());
    Assert::assertSame('ui::corner_position_enum.values.bottom-left.icon', CornerPositionEnum::BOTTOM_LEFT->getIcon());
    Assert::assertSame('ui::corner_position_enum.values.bottom-right.icon', CornerPositionEnum::BOTTOM_RIGHT->getIcon());
<<<<<<< .merge_file_7AKEqK
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
it('CornerPositionEnum getColor returns non-empty strings via EnumTrait', function (): void {
    foreach (CornerPositionEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getColor());
    }
});

<<<<<<< HEAD
=======
>>>>>>> .merge_file_0heBNv
=======
>>>>>>> 804451c (Lint)
it('CornerPositionEnum getIcon returns non-empty strings via EnumTrait', function (): void {
    foreach (CornerPositionEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getIcon());
    }
<<<<<<< HEAD
<<<<<<< .merge_file_7GNX1X
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0heBNv
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_pLgSyY
});

it('CornerPositionEnum getCssClass returns correct CSS classes', function (): void {
    Assert::assertSame('top-0 left-0', CornerPositionEnum::TOP_LEFT->getCssClass());
    Assert::assertSame('top-0 right-0', CornerPositionEnum::TOP_RIGHT->getCssClass());
    Assert::assertSame('bottom-0 left-0', CornerPositionEnum::BOTTOM_LEFT->getCssClass());
    Assert::assertSame('bottom-0 right-0', CornerPositionEnum::BOTTOM_RIGHT->getCssClass());
});

it('CornerPositionEnum can be created from value', function (): void {
    Assert::assertSame(CornerPositionEnum::TOP_LEFT, CornerPositionEnum::from('top-left'));
    Assert::assertSame(CornerPositionEnum::BOTTOM_RIGHT, CornerPositionEnum::from('bottom-right'));
});

it('CornerPositionEnum getLabel returns a string', function (): void {
    foreach (CornerPositionEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getLabel());
    }
});

// --- FieldTypeEnum ---

it('FieldTypeEnum has correct values', function (): void {
    Assert::assertSame('text', FieldTypeEnum::TEXT->value);
    Assert::assertSame('email', FieldTypeEnum::EMAIL->value);
    Assert::assertSame('textarea', FieldTypeEnum::TEXTAREA->value);
    Assert::assertSame('select', FieldTypeEnum::SELECT->value);
    Assert::assertSame('radio', FieldTypeEnum::RADIO->value);
    Assert::assertSame('checkbox', FieldTypeEnum::CHECKBOX->value);
    Assert::assertSame('date', FieldTypeEnum::DATE->value);
    Assert::assertSame('time', FieldTypeEnum::TIME->value);
    Assert::assertSame('datetime', FieldTypeEnum::DATETIME->value);
});

it('FieldTypeEnum implements HasLabel, HasColor, HasIcon', function (): void {
    Assert::assertInstanceOf(HasLabel::class, FieldTypeEnum::TEXT);
    Assert::assertInstanceOf(HasColor::class, FieldTypeEnum::TEXT);
    Assert::assertInstanceOf(HasIcon::class, FieldTypeEnum::TEXT);
});

it('FieldTypeEnum getLabel returns a string', function (): void {
    foreach (FieldTypeEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getLabel());
    }
});

it('FieldTypeEnum getColor returns a string', function (): void {
    foreach (FieldTypeEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getColor());
    }
});

it('FieldTypeEnum getIcon returns a string', function (): void {
    foreach (FieldTypeEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getIcon());
    }
});

it('FieldTypeEnum getDescription returns a string', function (): void {
    foreach (FieldTypeEnum::cases() as $case) {
        Assert::assertNotEmpty($case->getDescription());
    }
});

it('FieldTypeEnum can be created from value', function (): void {
    Assert::assertSame(FieldTypeEnum::TEXT, FieldTypeEnum::from('text'));
    Assert::assertSame(FieldTypeEnum::EMAIL, FieldTypeEnum::from('email'));
});

// --- TableLayout ---

it('TableLayout has correct values', function (): void {
    Assert::assertSame('list', TableLayout::LIST->value);
    Assert::assertSame('grid', TableLayout::GRID->value);
});

it('TableLayout getLabel returns non-empty strings via EnumTrait', function (): void {
    Assert::assertNotEmpty(TableLayout::LIST->getLabel());
    Assert::assertNotEmpty(TableLayout::GRID->getLabel());
});

<<<<<<< .merge_file_7AKEqK
<<<<<<< HEAD
<<<<<<< .merge_file_7GNX1X
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_pLgSyY
it('TableLayout getColor returns translation keys via EnumTrait', function (): void {
    Assert::assertSame('ui::table_layout.values.list.color', TableLayout::LIST->getColor());
    Assert::assertSame('ui::table_layout.values.grid.color', TableLayout::GRID->getColor());
});

it('TableLayout getIcon returns translation keys via EnumTrait', function (): void {
    Assert::assertSame('ui::table_layout.values.list.icon', TableLayout::LIST->getIcon());
    Assert::assertSame('ui::table_layout.values.grid.icon', TableLayout::GRID->getIcon());
<<<<<<< .merge_file_7AKEqK
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
it('TableLayout getColor returns resolved enum colors', function (): void {
    Assert::assertSame('primary', TableLayout::LIST->getColor());
    Assert::assertSame('secondary', TableLayout::GRID->getColor());
});

it('TableLayout getIcon returns resolved heroicon names', function (): void {
    Assert::assertSame('heroicon-o-list-bullet', TableLayout::LIST->getIcon());
    Assert::assertSame('heroicon-o-squares-2x2', TableLayout::GRID->getIcon());
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
it('TableLayout getColor returns resolved enum colors', function (): void {
    Assert::assertSame('primary', TableLayout::LIST->getColor());
    Assert::assertSame('secondary', TableLayout::GRID->getColor());
});

it('TableLayout getIcon returns resolved heroicon names', function (): void {
    Assert::assertSame('heroicon-o-list-bullet', TableLayout::LIST->getIcon());
    Assert::assertSame('heroicon-o-squares-2x2', TableLayout::GRID->getIcon());
<<<<<<< HEAD
>>>>>>> .merge_file_0heBNv
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_pLgSyY
});

it('TableLayout toggle switches between layouts', function (): void {
    Assert::assertSame(TableLayout::GRID, TableLayout::LIST->toggle());
    Assert::assertSame(TableLayout::LIST, TableLayout::GRID->toggle());
});

it('TableLayout can be created from value', function (): void {
    Assert::assertSame(TableLayout::LIST, TableLayout::from('list'));
    Assert::assertSame(TableLayout::GRID, TableLayout::from('grid'));
});
