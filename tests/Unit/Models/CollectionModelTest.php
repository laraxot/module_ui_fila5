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
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tGTR6O
=======
use Modules\UI\Database\Factories\CollectionFactory;
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> .merge_file_tGTR6O
=======
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
>>>>>>> 0dadab4 (Lint)
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
>>>>>>> 0dadab4 (Lint)
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
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        Assert::assertTrue($collection->timestamps);
>>>>>>> .merge_file_tGTR6O
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
>>>>>>> 0dadab4 (Lint)
    });
});
