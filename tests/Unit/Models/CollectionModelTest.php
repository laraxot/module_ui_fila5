<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Collection;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

<<<<<<< HEAD
uses(TestCase::class)->group('no-ui-db');
=======
uses(TestCase::class);
>>>>>>> laraxot/dev

describe('Collection Model', function (): void {
    test('it can hydrate a collection with valid data in memory', function (): void {
        $collection = new Collection([
            'name' => 'Hero Components',
            'type' => 'block',
            'theme_id' => 1,
        ]);

        Assert::assertSame('block', $collection->type);
        Assert::assertSame('Hero Components', $collection->name);
        Assert::assertSame(1, (int) $collection->theme_id);
    });

    test('it has fillable attributes', function (): void {
<<<<<<< HEAD
        $collection = new Collection();
=======
        $collection = new Collection;
>>>>>>> laraxot/dev
        $expected = ['name', 'description', 'type'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $collection->getFillable(), true));
        }
    });

    test('collection has timestamps enabled', function (): void {
<<<<<<< HEAD
        $collection = new Collection();
=======
        $collection = new Collection;
>>>>>>> laraxot/dev

        Assert::assertTrue($collection->timestamps);
    });
});
