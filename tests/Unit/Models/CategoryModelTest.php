<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ExbyOV
<<<<<<< HEAD
use Modules\UI\Database\Factories\CategoryFactory;
=======
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Coy25G
<<<<<<< HEAD
use Modules\UI\Database\Factories\CategoryFactory;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\UI\Database\Factories\CategoryFactory;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nuoiNl
>>>>>>> .merge_file_LXb8tQ
=======
use Modules\UI\Database\Factories\CategoryFactory;
>>>>>>> laraxot/dev
=======
use Modules\UI\Database\Factories\CategoryFactory;
>>>>>>> laraxot/dev
use Modules\UI\Models\Category;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

describe('Category Model', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ExbyOV
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Coy25G
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_LXb8tQ
    test('it can create a category with valid data', function (): void {
        $category = CategoryFactory::new()->createOne([
=======
    test('it can hydrate a category with valid data in memory', function (): void {
        $category = new Category();
        $category->forceFill([
>>>>>>> .merge_file_nuoiNl
            'title' => 'Test Category',
            'slug' => 'test-category',
            'is_active' => 1,
            'sort_order' => 0,
        ]);

        Assert::assertSame('Test Category', $category->title);
        Assert::assertSame('test-category', $category->slug);
        Assert::assertSame(1, (int) $category->is_active);
=======
=======
>>>>>>> laraxot/dev
    test('it can create a category with valid data', function (): void {
        $category = CategoryFactory::new()->createOne([
            'title' => 'Test Category',
            'slug' => 'test-category',
            'is_active' => 1,
        ]);

        Assert::assertSame('Test Category', $category->title);
        Assert::assertSame(1, $category->is_active);
>>>>>>> laraxot/dev
    });

    test('it has fillable attributes', function (): void {
        $category = new Category();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ExbyOV
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_LXb8tQ
    test('it can hydrate a category with valid data in memory', function (): void {
        $category = new Category;
        $category->forceFill([
            'title' => 'Test Category',
            'slug' => 'test-category',
            'is_active' => 1,
            'sort_order' => 0,
        ]);

        Assert::assertSame('Test Category', $category->title);
        Assert::assertSame('test-category', $category->slug);
        Assert::assertSame(1, (int) $category->is_active);
    });

    test('it has fillable attributes', function (): void {
        $category = new Category;
<<<<<<< .merge_file_ExbyOV
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_LXb8tQ
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        $expected = ['name', 'description', 'icon', 'parent_id', 'is_active', 'sort_order'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $category->getFillable(), true));
        }
    });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ExbyOV
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Coy25G
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_LXb8tQ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    test('category has timestamps', function (): void {
        $category = CategoryFactory::new()->createOne();

        Assert::assertNotNull($category->created_at);
        Assert::assertNotNull($category->updated_at);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ExbyOV
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_LXb8tQ
    test('category has timestamps enabled', function (): void {
        $category = new Category;

        Assert::assertTrue($category->timestamps);
<<<<<<< .merge_file_ExbyOV
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    test('category has timestamps enabled', function (): void {
        $category = new Category();

        Assert::assertTrue($category->timestamps);
>>>>>>> .merge_file_nuoiNl
>>>>>>> .merge_file_LXb8tQ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    });
});
