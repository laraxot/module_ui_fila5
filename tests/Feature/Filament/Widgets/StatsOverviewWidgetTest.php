<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Feature\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as FilamentStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\UI\Filament\Widgets\StatsOverviewWidget;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

use function Safe\file_get_contents;

uses(TestCase::class);

test('stats overview widget extends correct base class', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatsOverviewWidget();
=======
<<<<<<< .merge_file_TnEyfv
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget();
=======
    $widget = new StatsOverviewWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_IuyZio
>>>>>>> laraxot/dev
=======
    $widget = new StatsOverviewWidget();
>>>>>>> laraxot/dev
    Assert::assertInstanceOf(FilamentStatsOverviewWidget::class, $widget);
});

test('stats overview widget has correct namespace', function (): void {
    Assert::assertStringContainsString('Modules\\UI\\Filament\\Widgets', StatsOverviewWidget::class);
});

test('stats overview widget has getStats method', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TnEyfv
=======
    $widget = new StatsOverviewWidget();
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
>>>>>>> .merge_file_IuyZio
    $widget = new StatsOverviewWidget();
=======
    $widget = new StatsOverviewWidget;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_TnEyfv
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_IuyZio
=======
    $widget = new StatsOverviewWidget();
>>>>>>> laraxot/dev
    $reflection = new \ReflectionClass($widget);
    Assert::assertTrue($reflection->hasMethod('getStats'));
});

test('stats overview widget returns correct stats', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TnEyfv
=======
    $widget = new StatsOverviewWidget();
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
>>>>>>> .merge_file_IuyZio
    $widget = new StatsOverviewWidget();
=======
    $widget = new StatsOverviewWidget;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_TnEyfv
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_IuyZio
=======
    $widget = new StatsOverviewWidget();
>>>>>>> laraxot/dev
    $reflection = new \ReflectionClass($widget);
    $method = $reflection->getMethod('getStats');
    Assert::assertTrue($method->isProtected());

    $method->setAccessible(true);
    $stats = $method->invoke($widget);

    Assert::assertIsArray($stats);
    foreach ($stats as $stat) {
        Assert::assertInstanceOf(Stat::class, $stat);
    }
});

test('stats overview widget can be instantiated', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    $widget = new StatsOverviewWidget();
=======
<<<<<<< .merge_file_TnEyfv
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget;
=======
<<<<<<< HEAD
    $widget = new StatsOverviewWidget();
=======
    $widget = new StatsOverviewWidget;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_IuyZio
>>>>>>> laraxot/dev
=======
    $widget = new StatsOverviewWidget();
>>>>>>> laraxot/dev
    Assert::assertInstanceOf(StatsOverviewWidget::class, $widget);
});

test('stats overview widget has correct strict types declaration', function (): void {
    $reflection = new \ReflectionClass(StatsOverviewWidget::class);
    $filename = $reflection->getFileName();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TnEyfv
=======
    if (false !== $filename) {
=======
<<<<<<< HEAD
    if ($filename !== false) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_IuyZio
    if (false !== $filename) {
=======
    if ($filename !== false) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_TnEyfv
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_IuyZio
=======
    if (false !== $filename) {
>>>>>>> laraxot/dev
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('declare(strict_types=1)', $content);
    }
});

test('stats overview widget getStats method is protected', function (): void {
    $reflection = new \ReflectionClass(StatsOverviewWidget::class);
    $getStatsMethod = $reflection->getMethod('getStats');
    Assert::assertTrue($getStatsMethod->isProtected());
});

test('stats overview widget getStats method has correct return type', function (): void {
    $reflection = new \ReflectionClass(StatsOverviewWidget::class);
    $getStatsMethod = $reflection->getMethod('getStats');
    $returnType = $getStatsMethod->getReturnType();

    Assert::assertNotNull($returnType);
<<<<<<< HEAD
<<<<<<< .merge_file_TnEyfv
=======
<<<<<<< .merge_file_Ye3B8G
<<<<<<< HEAD
    Assert::assertSame('array', $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType);
=======
<<<<<<< HEAD
    Assert::assertInstanceOf(\ReflectionNamedType::class, $returnType);
    Assert::assertSame('array', $returnType->getName());
=======
>>>>>>> .merge_file_IuyZio
<<<<<<< HEAD
    Assert::assertSame('array', $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType);
=======
    Assert::assertInstanceOf(\ReflectionNamedType::class, $returnType);
    Assert::assertSame('array', $returnType->getName());
>>>>>>> laraxot/dev
<<<<<<< .merge_file_TnEyfv
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    Assert::assertInstanceOf(\ReflectionNamedType::class, $returnType);
    Assert::assertSame('array', $returnType->getName());
>>>>>>> .merge_file_JqIqDg
>>>>>>> .merge_file_IuyZio
=======
    Assert::assertSame('array', $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType);
>>>>>>> laraxot/dev
});

test('stats overview widget has correct use statements', function (): void {
    $reflection = new \ReflectionClass(StatsOverviewWidget::class);
    $filename = $reflection->getFileName();

<<<<<<< HEAD
<<<<<<< HEAD
    if (false !== $filename) {
        $content = file_get_contents($filename);
<<<<<<< .merge_file_Ye3B8G
        Assert::assertStringContainsString('use Filament\\Widgets\\StatsOverviewWidget as BaseWidget;', $content);
=======
<<<<<<< .merge_file_TnEyfv
    if ($filename !== false) {
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('use Modules\\Xot\\Filament\\Widgets\\XotBaseStatsOverviewWidget;', $content);
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
    if ($filename !== false) {
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('use Modules\\Xot\\Filament\\Widgets\\XotBaseStatsOverviewWidget;', $content);
=======
<<<<<<< HEAD
    if (false !== $filename) {
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('use Filament\\Widgets\\StatsOverviewWidget as BaseWidget;', $content);
=======
    if ($filename !== false) {
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('use Modules\\Xot\\Filament\\Widgets\\XotBaseStatsOverviewWidget;', $content);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        Assert::assertStringContainsString('use Modules\\Xot\\Filament\\Widgets\\XotBaseStatsOverviewWidget;', $content);
>>>>>>> .merge_file_JqIqDg
>>>>>>> .merge_file_IuyZio
=======
    if (false !== $filename) {
        $content = file_get_contents($filename);
        Assert::assertStringContainsString('use Filament\\Widgets\\StatsOverviewWidget as BaseWidget;', $content);
>>>>>>> laraxot/dev
    }
});
