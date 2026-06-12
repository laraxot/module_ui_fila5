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

    public function test_it_can_create_a_theme_with_valid_data(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
            'name' => 'Test Theme',
            'is_active' => true,
        ]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Test Theme', $theme->name);
        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function test_it_has_fillable_attributes(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = new Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            /** @phpstan-ignore-next-line -- Theme model is optional */
            Assert::assertTrue(in_array($field, $theme->getFillable()));
        }
    }

    public function test_it_casts_is_active_to_boolean(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => '1']);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->is_active);
        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function test_it_casts_config_to_array(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsArray($theme->config);
        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('#ff0000', $theme->config['primary_color']);
    }

    public function test_it_casts_needs_compilation_to_boolean(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['needs_compilation' => true]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertIsBool($theme->needs_compilation);
        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->needs_compilation);
    }

    public function test_theme_can_have_parent_theme(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $parent = Theme::factory()->create(['name' => 'Parent Theme']);
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $child = Theme::factory()->create(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertSame('Parent Theme', $child->parent->name);
    }

    public function test_theme_can_be_active(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => true]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertTrue($theme->is_active);
    }

    public function test_theme_can_be_inactive(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create(['is_active' => false]);

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertFalse($theme->is_active);
    }

    public function test_theme_has_timestamps(): void
    {
        /** @phpstan-ignore-next-line -- Theme model is optional, guarded by setUp */
        $theme = Theme::factory()->create();

        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->created_at);
        /** @phpstan-ignore-next-line -- Theme model is optional */
        Assert::assertNotNull($theme->updated_at);
    }
}
