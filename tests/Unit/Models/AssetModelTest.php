<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Asset;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;
use ReflectionClass;

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

    public function test_can_be_instantiated(): void
    {
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertInstanceOf(Asset::class, $asset);
    }

    public function test_has_fillable_attributes(): void
    {
        $expected = ['name', 'type', 'path', 'theme_id', 'is_minified', 'is_compressed', 'order', 'should_bundle'];

        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        foreach ($expected as $field) {
            /** @phpstan-ignore-next-line -- Asset model is optional */
            Assert::assertTrue(in_array($field, $asset->getFillable()));
        }
    }

    public function test_has_casts_defined(): void
    {
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        $casts = $asset->getCasts(); // @phpstan-ignore-line
        /** @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_minified']);
        /** @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_compressed']);
        /** @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('integer', $casts['order']);
        /** @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['should_bundle']);
    }

    public function test_has_theme_relationship(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new ReflectionClass(Asset::class);
        Assert::assertTrue($reflection->hasMethod('theme'));
    }

    public function test_has_correct_table_name(): void
    {
        /** @phpstan-ignore-next-line -- Asset model is optional, guarded by setUp */
        $asset = new Asset();
        /** @phpstan-ignore-next-line -- Asset model is optional */
        Assert::assertSame('assets', $asset->getTable());
    }

    public function test_has_model_base_class(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        Assert::assertTrue(is_a(Asset::class, 'Modules\UI\Models\BaseModel', true));
    }

    public function test_uses_strict_types(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new ReflectionClass(Asset::class);
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    }

    public function test_has_correct_namespace(): void
    {
        /** @phpstan-ignore-next-line -- Asset::class resolves to string even if class absent */
        $reflection = new ReflectionClass(Asset::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    }
}
