<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Theme;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
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

<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
>>>>>>> laraxot/dev
uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Theme')) {
        Assert::markTestSkipped('Theme model is not part of the UI module artifact set.');
    }
});

describe('Theme Model', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
    test('it can create atheme with valid data', function (): void {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
<<<<<<< HEAD
    test('it can create a theme with valid data', function (): void {
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set (test skipped at runtime)) */
=======
>>>>>>> .merge_file_mcoYME
<<<<<<< HEAD
    test('it can create atheme with valid data', function (): void {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
    test('it can create a theme with valid data', function (): void {
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set (test skipped at runtime)) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_guVjzA
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    test('it can create a theme with valid data', function (): void {
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set (test skipped at runtime)) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
    test('it can create atheme with valid data', function (): void {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
>>>>>>> laraxot/dev
        $theme = Theme::factory()->createOne([
            'name' => 'Test Theme',
            'is_active' => true,
        ]);

<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< .merge_file_1WIglI
>>>>>>> .merge_file_mcoYME
<<<<<<< HEAD
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line -- Theme model is optional */
=======
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line -- Theme model is optional */
=======
>>>>>>> .merge_file_mcoYME
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_guVjzA
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertTrue($theme->is_active);
    });

    test('it has fillable attributes', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
>>>>>>> laraxot/dev
        $theme = new Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
<<<<<<< HEAD
<<<<<<< .merge_file_1WIglI
            /* @phpstan-ignore-next-line -- Theme model is optional */
            Assert::assertTrue(in_array($field, $theme->getFillable()));
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
        $theme = new Theme;
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
            Assert::assertTrue(in_array($field, $theme->getFillable(), true));
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            /* @phpstan-ignore-next-line class.notFound (Theme model absent from artifact set) */
            Assert::assertTrue(in_array($field, $theme->getFillable(), true));
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
            /* @phpstan-ignore-next-line -- Theme model is optional */
            Assert::assertTrue(in_array($field, $theme->getFillable()));
>>>>>>> laraxot/dev
        }
    });

    test('it casts is active to boolean', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
        $theme = Theme::factory()->createOne(['is_active' => '1']);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->is_active);
<<<<<<< .merge_file_1WIglI
        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['is_active' => '1']);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->is_active);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->createOne(['is_active' => '1']);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->is_active);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertTrue($theme->is_active);
    });

    test('it casts config to array', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
<<<<<<< HEAD
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
=======
>>>>>>> .merge_file_mcoYME
<<<<<<< HEAD
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_guVjzA
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
>>>>>>> laraxot/dev
        $theme = Theme::factory()->createOne([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< .merge_file_1WIglI
>>>>>>> .merge_file_mcoYME
<<<<<<< HEAD
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line -- Theme model is optional */
=======
<<<<<<< .merge_file_guVjzA
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
=======
<<<<<<< HEAD
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line -- Theme model is optional */
=======
>>>>>>> .merge_file_mcoYME
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_guVjzA
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertSame('#ff0000', $theme->config['primary_color']);
    });

    test('it casts needs compilation to boolean', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
        $theme = Theme::factory()->createOne(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->needs_compilation);
<<<<<<< .merge_file_1WIglI
        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertIsBool($theme->needs_compilation);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->createOne(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->needs_compilation);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertTrue($theme->needs_compilation);
    });

    test('theme can have parent theme', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
        $parent = Theme::factory()->createOne(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line class.notFound, method.nonObject, property.nonObject (Theme model absent from artifact set) */
        $child = Theme::factory()->createOne(['name' => 'Child Theme', 'parent_id' => $parent->id]);

<<<<<<< .merge_file_1WIglI
        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $parent = Theme::factory()->createOne(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line class.notFound, method.nonObject, property.nonObject (Theme model absent from artifact set) */
        $child = Theme::factory()->createOne(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $parent = Theme::factory()->createOne(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $child = Theme::factory()->createOne(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertSame('Parent Theme', $child->parent->name);
    });

    test('theme can be active', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
=======
>>>>>>> laraxot/dev
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->createOne(['is_active' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['is_active' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['is_active' => true]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
>>>>>>> laraxot/dev
        Assert::assertTrue($theme->is_active);
    });

    test('theme can be inactive', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
=======
>>>>>>> laraxot/dev
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->createOne(['is_active' => false]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['is_active' => false]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne(['is_active' => false]);

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
>>>>>>> laraxot/dev
        Assert::assertFalse($theme->is_active);
    });

    test('theme has timestamps', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_guVjzA
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1WIglI
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
=======
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
        $theme = Theme::factory()->createOne();

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertNotNull($theme->created_at);
<<<<<<< .merge_file_1WIglI
        /* @phpstan-ignore-next-line -- Theme model is optional */
<<<<<<< .merge_file_guVjzA
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_mcoYME
        /** @phpstan-ignore-next-line class.notFound, method.nonObject (Theme model absent from artifact set) */
        $theme = Theme::factory()->createOne();

        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
        Assert::assertNotNull($theme->created_at);
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
<<<<<<< .merge_file_guVjzA
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @phpstan-ignore-next-line property.nonObject (Theme model absent from artifact set) */
>>>>>>> .merge_file_nLvUFx
>>>>>>> .merge_file_mcoYME
=======
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->createOne();

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->created_at);
        /* @phpstan-ignore-next-line -- Theme model is optional */
>>>>>>> laraxot/dev
        Assert::assertNotNull($theme->updated_at);
    });
});
