<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Feature;

use Illuminate\Support\Facades\View;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Dp6MR9
<<<<<<< HEAD
=======
<<<<<<< .merge_file_tgQFHv
<<<<<<< HEAD
=======
<<<<<<< HEAD

/**
 * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ywTZ5b
// Laraxot module file — see docs/wiki for domain contract.
=======
>>>>>>> .merge_file_ZwS1aL

/**
 * @param array<string, mixed> $data
<<<<<<< .merge_file_Dp6MR9
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ywTZ5b
=======

/**
 * @param  array<string, mixed>  $data
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Dp6MR9
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ywTZ5b
 */
function renderCategoryTabsHtml(array $data = []): ?string
{
    if (! View::exists('pub_theme::components.blocks.navigation.category-tabs')) {
=======

/**
 * @param  array<string, mixed>  $data
=======

/**
 * @param array<string, mixed> $data
>>>>>>> laraxot/dev
 */
function renderCategoryTabsHtml(array $data = []): ?string
{
    /** @var view-string $viewName */
    $viewName = 'pub_theme::components.blocks.navigation.category-tabs';

    if (! View::exists($viewName)) {
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        return null;
    }

    try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Dp6MR9
<<<<<<< HEAD
        return View::make('pub_theme::components.blocks.navigation.category-tabs', $data)->render();
=======
        /** @var view-string $viewName */
        $viewName = 'pub_theme::components.blocks.navigation.category-tabs';
        return View::make($viewName, $data)->render();
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_tgQFHv
<<<<<<< HEAD
        return View::make('pub_theme::components.blocks.navigation.category-tabs', $data)->render();
=======
<<<<<<< HEAD
        /** @var view-string $viewName */
        $viewName = 'pub_theme::components.blocks.navigation.category-tabs';
        return View::make($viewName, $data)->render();
=======
<<<<<<< HEAD
        return View::make('pub_theme::components.blocks.navigation.category-tabs', $data)->render();
=======
        /** @var view-string $viewName */
        $viewName = 'pub_theme::components.blocks.navigation.category-tabs';
        return View::make($viewName, $data)->render();
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /** @var view-string $viewName */
        $viewName = 'pub_theme::components.blocks.navigation.category-tabs';

        return View::make($viewName, $data)->render();
>>>>>>> .merge_file_ZwS1aL
>>>>>>> .merge_file_ywTZ5b
=======
        return View::make($viewName, $data)->render();
>>>>>>> laraxot/dev
=======
        return View::make($viewName, $data)->render();
>>>>>>> laraxot/dev
    } catch (\Throwable) {
        return null;
    }
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Dp6MR9
=======
 * @param array<string, mixed> $data
=======
<<<<<<< HEAD
 * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ywTZ5b
 * @param array<string, mixed> $data
=======
 * @param  array<string, mixed>  $data
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Dp6MR9
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ywTZ5b
=======
 * @param  array<string, mixed>  $data
>>>>>>> laraxot/dev
=======
 * @param array<string, mixed> $data
>>>>>>> laraxot/dev
 */
function requireCategoryTabsHtml(array $data = []): string
{
    $html = renderCategoryTabsHtml($data);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Dp6MR9
=======
    if (null === $html) {
=======
<<<<<<< HEAD
    if ($html === null) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ywTZ5b
    if (null === $html) {
=======
    if ($html === null) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Dp6MR9
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ywTZ5b
=======
    if ($html === null) {
>>>>>>> laraxot/dev
=======
    if (null === $html) {
>>>>>>> laraxot/dev
        Assert::markTestSkipped('pub_theme category-tabs view not available in this install.');
    }

    return $html;
}

beforeEach(function (): void {
    /* @var \Modules\UI\Tests\TestCase $this */
    if (function_exists('config')) {
        config(['app.locale' => 'en']);
    }
});

it('category tabs component renders without errors', function (): void {
    $html = requireCategoryTabsHtml([
        'base_url' => '/markets',
        'show_counts' => true,
        'mobile_scrollable' => true,
        'active_category' => 'all',
    ]);

    Assert::assertStringContainsString('/markets', $html);
    Assert::assertStringContainsString('All Markets', $html);
});

it('category tabs shows all expected categories', function (): void {
    $html = requireCategoryTabsHtml([
        'base_url' => '/markets',
        'show_counts' => true,
    ]);

    foreach (['All Markets', 'Politics', 'Sports', 'Economics', 'Technology', 'Entertainment', 'Crypto'] as $label) {
        Assert::assertStringContainsString($label, $html);
    }
});

it('category tabs shows counts when enabled', function (): void {
    $html = requireCategoryTabsHtml(['show_counts' => true]);

    foreach (['250', '45', '67', '34', '28', '23', '19'] as $count) {
        Assert::assertStringContainsString($count, $html);
    }
});

it('category tabs hides counts when disabled', function (): void {
    $html = requireCategoryTabsHtml(['show_counts' => false]);

    Assert::assertStringNotContainsString(
        '<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">45</span>',
        $html
    );
    Assert::assertStringNotContainsString(
        '<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">67</span>',
        $html
    );
});

it('category tabs has mobile scrollable styling', function (): void {
    $html = requireCategoryTabsHtml(['mobile_scrollable' => true]);

    Assert::assertStringContainsString('overflow-x-auto', $html);
    Assert::assertStringContainsString('scrollbar-hide', $html);
});

it('category tabs has proper responsive classes', function (): void {
    $html = requireCategoryTabsHtml();

    Assert::assertStringContainsString('flex-nowrap md:flex-wrap', $html);
    Assert::assertStringContainsString('justify-start md:justify-center', $html);
});

it('category tabs generates correct urls', function (): void {
    $html = requireCategoryTabsHtml(['base_url' => '/markets']);

    Assert::assertStringContainsString('href="/markets"', $html);
    foreach (['politics', 'sports', 'economics', 'technology', 'entertainment', 'crypto'] as $category) {
        Assert::assertStringContainsString('href="/markets?category='.$category.'"', $html);
    }
});

it('category tabs highlights active category', function (): void {
    $html = requireCategoryTabsHtml(['active_category' => 'politics']);

    Assert::assertStringContainsString('bg-blue-600 text-white', $html);
});

it('category tabs has proper dark mode classes', function (): void {
    $html = requireCategoryTabsHtml();

    Assert::assertStringContainsString('dark:bg-slate-800', $html);
    Assert::assertStringContainsString('dark:border-slate-700', $html);
    Assert::assertStringContainsString('dark:text-slate-300', $html);
    Assert::assertStringContainsString('dark:hover:text-white', $html);
});

it('category tabs has sticky positioning', function (): void {
    $html = requireCategoryTabsHtml();

    Assert::assertStringContainsString('sticky top-0', $html);
    Assert::assertStringContainsString('z-40', $html);
});

it('category tabs has proper category icons', function (): void {
    $html = requireCategoryTabsHtml();

    foreach (['🗳️', '⚽', '📈', '💻', '🎬', '₿'] as $icon) {
        Assert::assertStringContainsString($icon, $html);
    }
});
