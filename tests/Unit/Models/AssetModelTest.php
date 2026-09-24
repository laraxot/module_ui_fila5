<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
use Modules\UI\Models\Asset;
>>>>>>> 804451c (Lint)
=======
use Modules\UI\Models\Asset;
>>>>>>> .merge_file_ErRPJb
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
/*
 * Asset is an OPTIONAL model that is NOT part of the UI module artifact set
 * (no Models/Asset.php, no AssetFactory, no create_assets_table migration).
 * These tests skip at runtime via the class_exists() guard below. The class is
 * referenced by its FQCN string and narrowed with assertions, so PHPStan analyses
 * the body without any ignore annotation. Per docs/wiki/rules/no-phpstan-probe-models.md
 * we do NOT create a fake probe model just to satisfy the analyser. When the Asset
 * model + AssetFactory are actually added, switch these calls to the typed model
 * usage (see CategoryModelTest).
 */

const UI_ASSET_MODEL_CLASS = 'Modules\\UI\\Models\\Asset';

/**
 * @return class-string<Model>
 */
function uiAssetModelClass(): string
{
    $class = UI_ASSET_MODEL_CLASS;
    Assert::assertTrue(class_exists($class), 'Asset model class must exist.');
    Assert::assertTrue(is_subclass_of($class, Model::class), 'Asset must be an Eloquent model.');

    return $class;
}

function uiAssetModel(): Model
{
    $class = uiAssetModelClass();

    return new $class();
}

>>>>>>> .merge_file_7Icx8h
uses(TestCase::class);

beforeEach(function (): void {
    if (! class_exists(UI_ASSET_MODEL_CLASS)) {
=======
>>>>>>> laraxot/dev
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Asset')) {
>>>>>>> 804451c (Lint)
=======
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Asset')) {
>>>>>>> .merge_file_ErRPJb
        Assert::markTestSkipped('Asset model is not part of the UI module artifact set.');
    }
});

describe('Asset Model', function (): void {
    test('can be instantiated', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        Assert::assertInstanceOf(Asset::class, $asset);
=======
        Assert::assertInstanceOf(uiAssetModelClass(), uiAssetModel());
>>>>>>> .merge_file_7Icx8h
=======
        Assert::assertInstanceOf(Asset::class, $asset);
>>>>>>> 804451c (Lint)
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertInstanceOf(Asset::class, $asset);
>>>>>>> .merge_file_ErRPJb
    });

    test('has fillable attributes', function (): void {
        $expected = ['name', 'type', 'path', 'theme_id', 'is_minified', 'is_compressed', 'order', 'should_bundle'];

<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_ErRPJb
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Asset model is optional */
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line class.notFound, argument.type (Asset model absent from artifact set) */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            Assert::assertTrue(in_array($field, $asset->getFillable()));
=======
        $fillable = uiAssetModel()->getFillable();
        foreach ($expected as $field) {
            Assert::assertContains($field, $fillable);
>>>>>>> .merge_file_7Icx8h
=======
>>>>>>> laraxot/dev
            Assert::assertTrue(in_array($field, $asset->getFillable()));
>>>>>>> 804451c (Lint)
=======
            Assert::assertTrue(in_array($field, $asset->getFillable()));
>>>>>>> .merge_file_ErRPJb
        }
    });

    test('has casts defined', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_ErRPJb
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
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ErRPJb
        Assert::assertSame('boolean', $casts['should_bundle']);
    });

    test('has theme relationship', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ErRPJb
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
<<<<<<< .merge_file_rx3MV1
=======
        $casts = uiAssetModel()->getCasts();
        Assert::assertSame('boolean', $casts['is_minified'] ?? null);
        Assert::assertSame('boolean', $casts['is_compressed'] ?? null);
        Assert::assertSame('integer', $casts['order'] ?? null);
        Assert::assertSame('boolean', $casts['should_bundle'] ?? null);
    });

    test('has theme relationship', function (): void {
        $reflection = new \ReflectionClass(uiAssetModelClass());
>>>>>>> .merge_file_7Icx8h
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
        $reflection = new \ReflectionClass(Asset::class);
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_ErRPJb
        Assert::assertTrue($reflection->hasMethod('theme'));
    });

    test('has correct table name', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset model is optional */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset model is optional */
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
        $asset = new Asset;
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset model is optional */
>>>>>>> .merge_file_ErRPJb
        Assert::assertSame('assets', $asset->getTable());
    });

    test('has model base class', function (): void {
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
<<<<<<< .merge_file_rx3MV1
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ErRPJb
        Assert::assertTrue(is_a(Asset::class, 'Modules\UI\Models\BaseModel', true));
    });

    test('uses strict types', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ErRPJb
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
<<<<<<< .merge_file_rx3MV1
=======
        Assert::assertSame('assets', uiAssetModel()->getTable());
    });

    test('has model base class', function (): void {
        Assert::assertTrue(is_a(uiAssetModelClass(), 'Modules\\UI\\Models\\BaseModel', true));
    });

    test('uses strict types', function (): void {
        $reflection = new \ReflectionClass(uiAssetModelClass());
>>>>>>> .merge_file_7Icx8h
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
        $reflection = new \ReflectionClass(Asset::class);
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_ErRPJb
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    });

    test('has correct namespace', function (): void {
<<<<<<< .merge_file_rx3MV1
<<<<<<< HEAD
<<<<<<< .merge_file_TYIwra
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Asset model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
=======
        $reflection = new \ReflectionClass(uiAssetModelClass());
        Assert::assertSame('Modules\\UI\\Models', $reflection->getNamespaceName());
>>>>>>> .merge_file_7Icx8h
=======
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
>>>>>>> 804451c (Lint)
=======
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
>>>>>>> .merge_file_ErRPJb
    });
});
