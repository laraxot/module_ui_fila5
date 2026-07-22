<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\UI\Models\Component;
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
 * Component is an OPTIONAL model that is NOT part of the UI module artifact set
 * (no Models/Component.php, no ComponentFactory, no create_components_table migration).
 * These tests skip at runtime via the class_exists() guard below. The inline
 * phpstan-ignore annotations are required because PHPStan analyses the body
 * statically regardless of the runtime skip. Per docs/wiki/rules/no-phpstan-probe-models.md
 * we do NOT create a fake probe model just to satisfy the analyser: we annotate
 * the real (skipped) test with a justification instead. When the Component model +
 * ComponentFactory are actually added, switch these calls to the typed model usage
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
    if (! class_exists('Modules\UI\Models\Component')) {
        Assert::markTestSkipped('Component model is not part of the UI module artifact set.');
    }
});

describe('Component Model', function (): void {
    test('can be instantiated', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new \Modules\UI\Models\Component();
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        Assert::assertInstanceOf(\Modules\UI\Models\Component::class, $component);
    });

    test('has fillable attributes', function (): void {
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new \Modules\UI\Models\Component();
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        Assert::assertInstanceOf(Component::class, $component);
    });

    test('has fillable attributes', function (): void {
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        $expected = [
            'name', 'theme_id', 'is_active', 'version', 'dependencies',
            'template', 'is_cacheable', 'cache_ttl', 'validation_rules',
            'view_path', 'data_schema', 'responsive_breakpoints',
            'supports_lazy_loading', 'lazy_loading_threshold',
            'cache_strategy', 'cache_duration',
        ];

        foreach ($expected as $field) {
<<<<<<< HEAD
<<<<<<< HEAD
            /* @phpstan-ignore-next-line class.notFound, argument.type (Component model absent from artifact set) */
=======
            /* @phpstan-ignore-next-line -- Component model is optional */
>>>>>>> dfac49d (.)
=======
            /* @phpstan-ignore-next-line class.notFound, argument.type (Component model absent from artifact set) */
>>>>>>> dfbb8305 (.)
            Assert::assertTrue(in_array($field, $component->getFillable()));
        }
    });

    test('has casts defined', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new \Modules\UI\Models\Component();
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $casts = $component->getCasts();
        Assert::assertIsArray($casts);
        Assert::assertSame('boolean', $casts['is_active']);
        Assert::assertSame('boolean', $casts['is_cacheable']);
        Assert::assertSame('array', $casts['dependencies']);
        Assert::assertSame('array', $casts['validation_rules']);
        Assert::assertSame('array', $casts['data_schema']);
        Assert::assertSame('array', $casts['responsive_breakpoints']);
        Assert::assertSame('boolean', $casts['supports_lazy_loading']);
        Assert::assertSame('integer', $casts['lazy_loading_threshold']);
<<<<<<< HEAD
=======
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
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertSame('integer', $casts['cache_duration']);
    });

    test('has theme relationship', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
=======
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($reflection->hasMethod('theme'));
    });

    test('has correct table name', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new \Modules\UI\Models\Component();
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component model is optional */
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new \Modules\UI\Models\Component();
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> dfbb8305 (.)
        Assert::assertSame('components', $component->getTable());
    });

    test('extends base model', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
=======
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($reflection->isSubclassOf('Modules\UI\Models\BaseModel'));
    });

    test('uses strict types', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
=======
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
>>>>>>> dfbb8305 (.)
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    });

    test('has correct namespace', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
=======
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
        $reflection = new \ReflectionClass(Component::class);
>>>>>>> dfac49d (.)
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $reflection = new \ReflectionClass(\Modules\UI\Models\Component::class);
>>>>>>> dfbb8305 (.)
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    });
});
