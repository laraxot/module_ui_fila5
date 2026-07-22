<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

/*
 * Theme is an OPTIONAL model that is NOT part of the UI module artifact set
 * (no Models/Theme.php, no ThemeFactory, no create_themes_table migration).
 * These tests skip at runtime via the class_exists() guard below. The inline
 * phpstan-ignore annotations are required because PHPStan analyses the body
 * statically regardless of the runtime skip. Per docs/wiki/rules/no-phpstan-probe-models.md
 * we do NOT create a fake probe model just to satisfy the analyser: we annotate
 * the real (skipped) test with a justification instead. When the Theme model +
 * ThemeFactory are actually added, switch these calls to the typed
 * `ThemeFactory::new()->createOne()` pattern (see CategoryModelTest) and drop
 * the ignores.
 */

<<<<<<< HEAD
=======
use Modules\UI\Models\Theme;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Theme')) {
        Assert::markTestSkipped('Theme model is not part of the UI module artifact set.');
    }
});

describe('Theme Model', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    test('it can create a theme with valid data', function (): void {
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set (test skipped at runtime)) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne([
=======
    test('it can create atheme with valid data', function (): void {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
>>>>>>> dfac49d (.)
=======
    test('it can create a theme with valid data', function (): void {
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set (test skipped at runtime)) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne([
>>>>>>> dfbb8305 (.)
            'name' => 'Test Theme',
            'is_active' => true,
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
=======
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($theme->is_active);
    });

    test('it has fillable attributes', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
        $theme = new \Modules\UI\Models\Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
            Assert::assertTrue(in_array($field, $theme->getFillable(), true));
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = new Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Theme model is optional */
            Assert::assertTrue(in_array($field, $theme->getFillable()));
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        }
    });

    test('it casts is active to boolean', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne(['is_active' => '1']);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->is_active);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => '1']);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->is_active);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($theme->is_active);
    });

    test('it casts config to array', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertSame('#ff0000', $theme->config['primary_color']);
    });

    test('it casts needs compilation to boolean', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->needs_compilation);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->needs_compilation);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($theme->needs_compilation);
    });

    test('theme can have parent theme', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $parent = \Modules\UI\Models\Theme::factory()->createOne(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line class.notFound, method.nonObject, property.nonObject (Theme model absent from artifact set) */
        $child = \Modules\UI\Models\Theme::factory()->createOne(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $parent = Theme::factory()->create(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $child = Theme::factory()->create(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertSame('Parent Theme', $child->parent->name);
    });

    test('theme can be active', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne(['is_active' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertTrue($theme->is_active);
    });

    test('theme can be inactive', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne(['is_active' => false]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => false]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertFalse($theme->is_active);
    });

    test('theme has timestamps', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = \Modules\UI\Models\Theme::factory()->createOne();

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertNotNull($theme->created_at);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< HEAD
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create();

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->created_at);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        Assert::assertNotNull($theme->updated_at);
    });
});
