<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Models;

use Modules\UI\Models\Theme;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (! class_exists('Modules\UI\Models\Theme')) {
        Assert::markTestSkipped('Theme model is not part of the UI module artifact set.');
    }
});

describe('Theme Model', function (): void {
    test('it can create atheme with valid data', function (): void {
        $theme = Theme::factory()->createOne([
            'name' => 'Test Theme',
            'is_active' => true,
        ]);

        Assert::assertSame('Test Theme', $theme->name);
        Assert::assertTrue($theme->is_active);
    });

    test('it has fillable attributes', function (): void {
        $theme = new Theme();
        $expected = ['name', 'description', 'is_active', 'config', 'parent_id', 'source_path', 'compiled_path', 'needs_compilation'];

        foreach ($expected as $field) {
            Assert::assertTrue(in_array($field, $theme->getFillable()));
        }
    });

    test('it casts is active to boolean', function (): void {
        $theme = Theme::factory()->createOne(['is_active' => '1']);

        Assert::assertIsBool($theme->is_active);
        Assert::assertTrue($theme->is_active);
    });

    test('it casts config to array', function (): void {
        $theme = Theme::factory()->createOne([
            'config' => ['primary_color' => '#ff0000', 'font_family' => 'Roboto'],
        ]);

        Assert::assertIsArray($theme->config);
        Assert::assertSame('#ff0000', $theme->config['primary_color']);
    });

    test('it casts needs compilation to boolean', function (): void {
        $theme = Theme::factory()->createOne(['needs_compilation' => true]);

        Assert::assertIsBool($theme->needs_compilation);
        Assert::assertTrue($theme->needs_compilation);
    });

    test('theme can have parent theme', function (): void {
        $parent = Theme::factory()->createOne(['name' => 'Parent Theme']);
        $child = Theme::factory()->createOne(['name' => 'Child Theme', 'parent_id' => $parent->id]);

        Assert::assertSame('Parent Theme', $child->parent->name);
    });

    test('theme can be active', function (): void {
        $theme = Theme::factory()->createOne(['is_active' => true]);

        Assert::assertTrue($theme->is_active);
    });

    test('theme can be inactive', function (): void {
        $theme = Theme::factory()->createOne(['is_active' => false]);

        Assert::assertFalse($theme->is_active);
    });

    test('theme has timestamps', function (): void {
        $theme = Theme::factory()->createOne();

        Assert::assertNotNull($theme->created_at);
        Assert::assertNotNull($theme->updated_at);
    });
});
