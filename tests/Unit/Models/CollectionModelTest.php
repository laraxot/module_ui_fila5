<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< .merge_file_d1W4IT
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tGTR6O
=======
>>>>>>> 804451c (Lint)
use Modules\UI\Models\Collection;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

describe('Collection Model', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_d1W4IT
<<<<<<< HEAD
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
<<<<<<< HEAD
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> .merge_file_tGTR6O
=======
>>>>>>> 804451c (Lint)
            'name' => 'Hero Components',
            'type' => 'block',
            'theme_id' => 1,
        ]);

        Assert::assertSame('block', $collection->type);
        Assert::assertSame('Hero Components', $collection->name);
<<<<<<< HEAD
<<<<<<< .merge_file_d1W4IT
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        Assert::assertSame(1, $collection->theme_id);
>>>>>>> .merge_file_tGTR6O
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
    });

    test('it has fillable attributes', function (): void {
        $collection = new Collection();
<<<<<<< HEAD
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable(), true));
        }
    });

    test('collection has timestamps enabled', function (): void {
        $collection = new Collection();

<<<<<<< .merge_file_d1W4IT
        Assert::assertNotNull($collection->created_at);
        Assert::assertNotNull($collection->updated_at);
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
        $collection = new Collection();
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable()));
        }
    });

    test('collection has timestamps', function (): void {
        $collection = CollectionFactory::new()->createOne();

        Assert::assertNotNull($collection->created_at);
        Assert::assertNotNull($collection->updated_at);
=======
>>>>>>> 804451c (Lint)
        Assert::assertSame(1, (int) $collection->theme_id);
    });

    test('it has fillable attributes', function (): void {
        $collection = new Collection;
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable(), true));
        }
    });

    test('collection has timestamps enabled', function (): void {
        $collection = new Collection;

        Assert::assertTrue($collection->timestamps);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        Assert::assertTrue($collection->timestamps);
>>>>>>> .merge_file_tGTR6O
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
    });
});
