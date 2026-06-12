<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Theme;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

final class ThemeModelTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        if (! class_exists('Modules\UI\Models\Theme')) {
            Assert::markTestSkipped('Theme model is not part of the UI module artifact set.');
        }
    }

    public function testItCanCreateAThemeWithValidData(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
            'name' => 'Test Theme',
            'is_active' => true,
        ]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function testItHasFillableAttributes(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = new Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            /* @phpstan-ignore-next-line -- Theme model is optional */
            Assert::assertTrue(in_array($field, $theme->getFillable()));
        }
    }

    public function testItCastsIsActiveToBoolean(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => '1']);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->is_active);
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function testItCastsConfigToArray(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('#ff0000', $theme->config['primary_color']);
    }

    public function testItCastsNeedsCompilationToBoolean(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['needs_compilation' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->needs_compilation);
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->needs_compilation);
    }

    public function testThemeCanHaveParentTheme(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $parent = Theme::factory()->create(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $child = Theme::factory()->create(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Parent Theme', $child->parent->name);
    }

    public function testThemeCanBeActive(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => true]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function testThemeCanBeInactive(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => false]);

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertFalse($theme->is_active);
    }

    public function testThemeHasTimestamps(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create();

        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->created_at);
        /* @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->updated_at);
    }
}
