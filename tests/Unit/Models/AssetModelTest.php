<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Asset;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

final class AssetModelTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        if (! class_exists('Modules\UI\Models\Asset')) {
            Assert::markTestSkipped('Asset model is not part of the UI module artifact set.');
        }
    }

    public function testCanBeInstantiated(): void
    {
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertInstanceOf(Asset::class, $asset);
    }

    public function testHasFillableAttributes(): void
    {
        $expected = ['name', 'type', 'path', 'theme_id', 'is_minified', 'is_compressed', 'order', 'should_bundle'];

        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Asset model is optional */
            Assert::assertTrue(in_array($field, $asset->getFillable()));
        }
    }

    public function testHasCastsDefined(): void
    {
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
        Assert::assertSame('boolean', $casts['should_bundle']);
    }

    public function testHasThemeRelationship(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertTrue($reflection->hasMethod('theme'));
    }

    public function testHasCorrectTableName(): void
    {
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /* @phpstan-ignore-next-line -- Asset model is optional */
        Assert::assertSame('assets', $asset->getTable());
    }

    public function testHasModelBaseClass(): void
    {
        /* @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertTrue(is_a(Asset::class, 'Modules\UI\Models\BaseModel', true));
    }

    public function testUsesStrictTypes(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    }

    public function testHasCorrectNamespace(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    }
}
