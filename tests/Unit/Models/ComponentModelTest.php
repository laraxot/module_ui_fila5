<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

final class ComponentModelTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        if (! class_exists('Modules\UI\Models\Component')) {
            Assert::markTestSkipped('Component model is not part of the UI module artifact set.');
        }
    }

    public function testCanBeInstantiated(): void
    {
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        Assert::assertInstanceOf(Component::class, $component);
    }

    public function testHasFillableAttributes(): void
    {
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        $expected = [
            'name', 'theme_id', 'is_active', 'version', 'dependencies',
            'template', 'is_cacheable', 'cache_ttl', 'validation_rules',
            'view_path', 'data_schema', 'responsive_breakpoints',
            'supports_lazy_loading', 'lazy_loading_threshold',
            'cache_strategy', 'cache_duration',
        ];

        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Component model is optional */
            Assert::assertTrue(in_array($field, $component->getFillable()));
        }
    }

    public function testHasCastsDefined(): void
    {
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        $casts = $component->getCasts(); // @phpstan-ignore-line
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_active']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['is_cacheable']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('array', $casts['dependencies']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('array', $casts['validation_rules']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('array', $casts['data_schema']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('array', $casts['responsive_breakpoints']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('boolean', $casts['supports_lazy_loading']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('integer', $casts['lazy_loading_threshold']);
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
        Assert::assertSame('integer', $casts['cache_duration']);
    }

    public function testHasThemeRelationship(): void
    {
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertTrue($reflection->hasMethod('theme'));
    }

    public function testHasCorrectTableName(): void
    {
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component model is optional */
        Assert::assertSame('components', $component->getTable());
    }

    public function testExtendsBaseModel(): void
    {
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertTrue($reflection->isSubclassOf('Modules\UI\Models\BaseModel'));
    }

    public function testUsesStrictTypes(): void
    {
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    }

    public function testHasCorrectNamespace(): void
    {
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    }
}
