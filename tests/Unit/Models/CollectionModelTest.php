<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< .merge_file_1E1pv2
use Modules\UI\Database\Factories\CollectionFactory;
=======
<<<<<<< .merge_file_P4Y9sn
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_z0fY8e
>>>>>>> .merge_file_FsLjuA
use Modules\UI\Models\Collection;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

describe('Collection Model', function (): void {
<<<<<<< .merge_file_1E1pv2
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
<<<<<<< .merge_file_P4Y9sn
=======
<<<<<<< .merge_file_d1W4IT
<<<<<<< HEAD
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
<<<<<<< HEAD
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
=======
>>>>>>> .merge_file_z0fY8e
<<<<<<< HEAD
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> laraxot/dev
<<<<<<< .merge_file_P4Y9sn
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> .merge_file_tGTR6O
>>>>>>> .merge_file_z0fY8e
>>>>>>> .merge_file_FsLjuA
            'name' => 'Hero Components',
            'type' => 'block',
            'theme_id' => 1,
        ]);

        Assert::assertSame('block', $collection->type);
        Assert::assertSame('Hero Components', $collection->name);
<<<<<<< .merge_file_1E1pv2
        Assert::assertSame(1, $collection->theme_id);
=======
<<<<<<< .merge_file_P4Y9sn
<<<<<<< HEAD
=======
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
>>>>>>> .merge_file_z0fY8e
>>>>>>> .merge_file_FsLjuA
    });

    test('it has fillable attributes', function (): void {
        $collection = new Collection();
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable(), true));
        }
    });

    test('collection has timestamps enabled', function (): void {
        $collection = new Collection();

<<<<<<< .merge_file_1E1pv2
        Assert::assertTrue($collection->timestamps);
=======
<<<<<<< .merge_file_d1W4IT
        Assert::assertNotNull($collection->created_at);
        Assert::assertNotNull($collection->updated_at);
<<<<<<< .merge_file_P4Y9sn
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_z0fY8e
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
<<<<<<< .merge_file_P4Y9sn
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        Assert::assertTrue($collection->timestamps);
>>>>>>> .merge_file_tGTR6O
>>>>>>> .merge_file_z0fY8e
>>>>>>> .merge_file_FsLjuA
    });
});
