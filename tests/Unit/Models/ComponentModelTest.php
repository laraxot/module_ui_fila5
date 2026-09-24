<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

<<<<<<< .merge_file_v5bhim
=======
<<<<<<< .merge_file_1mL2Df
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
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

<<<<<<< .merge_file_v5bhim
=======
<<<<<<< .merge_file_1mL2Df
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Component')) {
        Assert::markTestSkipped('Component model is not part of the UI module artifact set.');
    }
});

describe('Component Model', function (): void {
    test('can be instantiated', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component();
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        Assert::assertInstanceOf(Component::class, $component);
    });

    test('has fillable attributes', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
        $component = new Component();
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        $expected = [
            'name', 'theme_id', 'is_active', 'version', 'dependencies',
            'template', 'is_cacheable', 'cache_ttl', 'validation_rules',
            'view_path', 'data_schema', 'responsive_breakpoints',
            'supports_lazy_loading', 'lazy_loading_threshold',
            'cache_strategy', 'cache_duration',
        ];

        foreach ($expected as $field) {
<<<<<<< .merge_file_v5bhim
            /* @phpstan-ignore-next-line -- Component model is optional */
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
            /* @phpstan-ignore-next-line -- Component model is optional */
=======
<<<<<<< HEAD
            /* @phpstan-ignore-next-line class.notFound, argument.type (Component model absent from artifact set) */
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
            /* @phpstan-ignore-next-line -- Component model is optional */
=======
            /* @phpstan-ignore-next-line class.notFound, argument.type (Component model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            /* @phpstan-ignore-next-line class.notFound, argument.type (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
            Assert::assertTrue(in_array($field, $component->getFillable()));
        }
    });

    test('has casts defined', function (): void {
<<<<<<< .merge_file_v5bhim
=======
<<<<<<< .merge_file_1mL2Df
<<<<<<< HEAD
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
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
<<<<<<< .merge_file_v5bhim
=======
<<<<<<< .merge_file_TXsFeK
        /* @phpstan-ignore-next-line -- $casts is mixed from ignored call */
<<<<<<< .merge_file_1mL2Df
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DIBQpE
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
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
<<<<<<< .merge_file_1mL2Df
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        Assert::assertSame('integer', $casts['cache_duration']);
    });

    test('has theme relationship', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< .merge_file_1mL2Df
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertTrue($reflection->hasMethod('theme'));
    });

    test('has correct table name', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component model is optional */
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component model is optional */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component model is optional, guarded by setUp */
        $component = new Component();
        /* @phpstan-ignore-next-line -- Component model is optional */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component;
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
        $component = new Component();
        /* @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        Assert::assertSame('components', $component->getTable());
    });

    test('extends base model', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertTrue($reflection->isSubclassOf('Modules\UI\Models\BaseModel'));
    });

    test('uses strict types', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< .merge_file_1mL2Df
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        $reflection = new \ReflectionClass(Component::class);
        $fileName = $reflection->getFileName();
        Assert::assertNotFalse($fileName);
        $content = file_get_contents($fileName);
        Assert::assertStringContainsString('declare(strict_types=1);', $content);
    });

    test('has correct namespace', function (): void {
<<<<<<< .merge_file_v5bhim
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< .merge_file_1mL2Df
=======
<<<<<<< .merge_file_TXsFeK
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
=======
>>>>>>> .merge_file_DIBQpE
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Component::class resolves to string even if class absent */
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_1mL2Df
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound (Component model absent from artifact set) */
>>>>>>> .merge_file_PBvcCf
>>>>>>> .merge_file_DIBQpE
>>>>>>> .merge_file_IkqknI
        $reflection = new \ReflectionClass(Component::class);
        Assert::assertSame('Modules\UI\Models', $reflection->getNamespaceName());
    });
});
