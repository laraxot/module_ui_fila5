<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Feature;

<<<<<<< .merge_file_K1YqmF
=======
<<<<<<< .merge_file_46fMKE
=======
<<<<<<< .merge_file_eGpiAq
=======
use Filament\Tables\Columns\Column;
>>>>>>> .merge_file_OqUqfT
>>>>>>> .merge_file_bRWqlC
>>>>>>> .merge_file_kGuRY1
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Filament\Tables\Columns\PersonColumn;
use PHPUnit\Framework\Assert;

describe('PersonColumn — controparte di PersonSection', function (): void {
    it('can be instantiated with make() using the default name', function (): void {
        $column = PersonColumn::make();
        Assert::assertInstanceOf(PersonColumn::class, $column);
        Assert::assertSame('person', $column->getName());
    });

    it('accepts a custom name', function (): void {
        $column = PersonColumn::make('contact');
        Assert::assertSame('contact', $column->getName());
    });

    it('exposes the default field set, one TextColumn per field, directly on the record', function (): void {
        $column = PersonColumn::make();
<<<<<<< .merge_file_K1YqmF
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
<<<<<<< .merge_file_46fMKE
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
<<<<<<< .merge_file_eGpiAq
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
        $names = array_map(static fn (Column $field): string => $field->getName(), $column->getFields());
>>>>>>> .merge_file_OqUqfT
>>>>>>> .merge_file_bRWqlC
>>>>>>> .merge_file_kGuRY1

        Assert::assertSame([
            'first_name',
            'last_name',
            'email',
            'mobile_phone',
            'language',
        ], $names);
        foreach ($column->getFields() as $field) {
            Assert::assertInstanceOf(TextColumn::class, $field);
        }
    });

    it('restricts the field set via fields()', function (): void {
        $column = PersonColumn::make()->fields(['first_name', 'last_name']);
<<<<<<< .merge_file_K1YqmF
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
<<<<<<< .merge_file_46fMKE
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
<<<<<<< .merge_file_eGpiAq
        $names = array_map(static fn (\Filament\Tables\Columns\Column $field): string => $field->getName(), $column->getFields());
=======
        $names = array_map(static fn (Column $field): string => $field->getName(), $column->getFields());
>>>>>>> .merge_file_OqUqfT
>>>>>>> .merge_file_bRWqlC
>>>>>>> .merge_file_kGuRY1

        Assert::assertSame(['first_name', 'last_name'], $names);
    });
});
