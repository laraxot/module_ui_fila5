<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
>>>>>>> laraxot/dev
use Modules\UI\Models\Collection;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

<<<<<<< HEAD
uses(TestCase::class);

describe('Collection Model', function (): void {
    test('it can create a collection with valid data', function (): void {
        $collection = CollectionFactory::new()->createOne([
=======
uses(TestCase::class)->group('no-ui-db');

describe('Collection Model', function (): void {
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
>>>>>>> laraxot/dev
            'name' => 'Hero Components',
            'type' => 'block',
            'theme_id' => 1,
        ]);

        Assert::assertSame('block', $collection->type);
        Assert::assertSame('Hero Components', $collection->name);
<<<<<<< HEAD
=======
        Assert::assertSame(1, (int) $collection->theme_id);
>>>>>>> laraxot/dev
    });

    test('it has fillable attributes', function (): void {
        $collection = new Collection();
<<<<<<< HEAD
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
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable(), true));
        }
    });

    test('collection has timestamps enabled', function (): void {
        $collection = new Collection();

        Assert::assertTrue($collection->timestamps);
>>>>>>> laraxot/dev
    });
});
