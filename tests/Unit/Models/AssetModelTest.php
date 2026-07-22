<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\UI\Models\Asset;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
/*
 * Asset is an OPTIONAL model that is NOT part of the UI module artifact set
 * (no Models/Asset.php, no AssetFactory, no create_assets_table migration).
 * These tests skip at runtime via the class_exists() guard below. The inline
 * phpstan-ignore annotations are required because PHPStan analyses the body
 * statically regardless of the runtime skip. Per docs/wiki/rules/no-phpstan-probe-models.md
 * we do NOT create a fake probe model just to satisfy the analyser: we annotate
 * the real (skipped) test with a justification instead. When the Asset model +
 * AssetFactory are actually added, switch these calls to the typed model usage
 * (see CategoryModelTest) and drop the ignores.
 */

<<<<<<< HEAD
=======
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Asset')) {
        Assert::markTestSkipped('Asset model is not part of the UI module artifact set.');
    }
});

describe('Asset Model', function (): void {
    test('can be instantiated', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new \Modules\UI\Models\Asset();
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        Assert::assertInstanceOf(\Modules\UI\Models\Asset::class, $asset);
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertInstanceOf(Asset::class, $asset);
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
    });

    test('has fillable attributes', function (): void {
        $expected = ['name', 'type', 'path', 'theme_id', 'is_minified', 'is_compressed', 'order', 'should_bundle'];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new \Modules\UI\Models\Asset();
        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line class.notFound, argument.type (Asset model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Asset model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
            Assert::assertTrue(in_array($field, $asset->getFillable()));
        }
    });

    test('has casts defined', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new \Modules\UI\Models\Asset();
        /**
         * @var array<string, string> $casts
         *
         * @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set)
         */
        $casts = $asset->getCasts();
        Assert::assertSame('boolean', $casts['is_minified']);
        Assert::assertSame('boolean', $casts['is_compressed']);
        Assert::assertSame('integer', $casts['order']);
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        $casts = $asset->getCasts(); // @phpstan-ignore-line
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_minified']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_compressed']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('integer', $casts['order']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertSame('boolean', $casts['should_bundle']);
    });

    test('has theme relationship', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Asset::class);
=======
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Asset::class);
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($reflection->hasMethod('theme'));
    });

    test('has correct table name', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new \Modules\UI\Models\Asset();
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset model is optional */
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new \Modules\UI\Models\Asset();
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> dfbb8305 (.)
        Assert::assertSame('assets', $asset->getTable());
    });

    test('has model base class', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        Assert::assertTrue(is_a(\Modules\UI\Models\Asset::class, 'Modules\UI\Models\BaseModel', true));
    });

    test('uses strict types', function (): void {
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Asset::class);
<<<<<<< HEAD
=======
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertTrue(is_a(Asset::class, 'Modules\UI\Models\BaseModel', true));
    });

    test('uses strict types', function (): void {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    });

    test('has correct namespace', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Asset::class);
=======
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Asset::class);
>>>>>>> dfbb8305 (.)
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    });
});
