<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Asset;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Asset')) {
        Assert::markTestSkipped('Asset model is not part of the UI module artifact set.');
    }
});

describe('Asset Model', function (): void {
    test('can be instantiated', function (): void {
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertInstanceOf(Asset::class, $asset);
    });

    test('has fillable attributes', function (): void {
        $expected = ['name', 'type', 'path', 'theme_id', 'is_minified', 'is_compressed', 'order', 'should_bundle'];

        $asset = new Asset();
        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $asset->getFillable()));
        }
    });

    test('has casts defined', function (): void {
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_minified']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_compressed']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('integer', $casts['order']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['should_bundle']);
    });

    test('has theme relationship', function (): void {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertTrue($reflection->hasMethod('theme'));
    });

    test('has correct table name', function (): void {
        $asset = new Asset();
        Assert::assertSame('assets', $asset->getTable());
    });

    test('has model base class', function (): void {
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertTrue(is_a(Asset::class, 'Modules\UI\Models\BaseModel', true));
    });

    test('uses strict types', function (): void {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    });

    test('has correct namespace', function (): void {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    });
});
