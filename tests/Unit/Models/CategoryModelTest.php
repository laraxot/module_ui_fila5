<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
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
=======
use Modules\UI\Database\Factories\CategoryFactory;
>>>>>>> 0dadab4 (Lint)
use Modules\UI\Models\Category;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

describe('Category Model', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_Coy25G
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
    test('it can create a category with valid data', function (): void {
        $category = CategoryFactory::new()->createOne([
            'title' => 'Test Category',
            'slug' => 'test-category',
            'is_active' => 1,
        ]);

        Assert::assertSame('Test Category', $category->title);
        Assert::assertSame(1, $category->is_active);
>>>>>>> 0dadab4 (Lint)
    });

    test('it has fillable attributes', function (): void {
        $category = new Category();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $expected = ['name', 'description', 'icon', 'parent_id', 'is_active', 'sort_order'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $category->getFillable(), true));
        }
    });

<<<<<<< HEAD
<<<<<<< .merge_file_Coy25G
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    test('category has timestamps', function (): void {
        $category = CategoryFactory::new()->createOne();

        Assert::assertNotNull($category->created_at);
        Assert::assertNotNull($category->updated_at);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    test('category has timestamps enabled', function (): void {
        $category = new Category;

        Assert::assertTrue($category->timestamps);
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
=======
>>>>>>> 0dadab4 (Lint)
    });
});
