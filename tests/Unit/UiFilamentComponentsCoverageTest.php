<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

use Illuminate\Translation\PotentiallyTranslatedString;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
use Mockery;
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
use Mockery;
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Mockery\MockInterface;
use Modules\UI\Enums\FieldTypeEnum;
use Modules\UI\Enums\TableLayout;
use Modules\UI\Filament\Widgets\StatsOverviewWidget;
use Modules\UI\Models\Category;
use Modules\UI\Models\Policies\UiBasePolicy;
use Modules\UI\Providers\UIServiceProvider;
use Modules\UI\Rules\OpeningHoursRule;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Tests\FilamentSchemaCoverage;
use PHPUnit\Framework\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
use SplFileInfo;
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
use SplFileInfo;
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
use SplFileInfo;
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

uses(TestCase::class);

afterEach(function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
    Mockery::close();
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
    Mockery::close();
=======
    \Mockery::close();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
    \Mockery::close();
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
    Mockery::close();
>>>>>>> laraxot/dev
=======
    \Mockery::close();
>>>>>>> laraxot/dev
});

describe('UI Filament widgets and components coverage', function (): void {
    test('Filament widgets are instantiable', function (): void {
        [$appRoot, $ns] = [dirname(__DIR__, 2).'/app', 'Modules\\UI\\'];
        $seen = 0;
        foreach (FilamentSchemaCoverage::discover($appRoot, $ns, 'Widget') as $class) {
            if (! str_contains($class, 'Filament\\Widgets\\')) {
                continue;
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
            Assert::assertInstanceOf($class, new $class);
            $seen++;
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
            Assert::assertInstanceOf($class, new $class);
            $seen++;
=======
            Assert::assertInstanceOf($class, new $class());
            ++$seen;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
            Assert::assertInstanceOf($class, new $class());
            ++$seen;
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
            Assert::assertInstanceOf($class, new $class);
            $seen++;
>>>>>>> laraxot/dev
=======
            Assert::assertInstanceOf($class, new $class());
            ++$seen;
>>>>>>> laraxot/dev
        }
        Assert::assertGreaterThan(0, $seen);
    });

    test('Filament form components are loadable', function (): void {
        [$appRoot] = [dirname(__DIR__, 2).'/app'];
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($appRoot.'/Filament/Forms'));
        $count = 0;
        foreach ($iterator as $file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
            if (! $file instanceof SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
            if (! $file instanceof SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
=======
            if (! $file instanceof \SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
            if (! $file instanceof \SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
            if (! $file instanceof SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
>>>>>>> laraxot/dev
=======
            if (! $file instanceof \SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
>>>>>>> laraxot/dev
                continue;
            }
            $class = 'Modules\\UI\\'.str_replace(['/', '.php'], ['\\', ''], substr($file->getPathname(), strlen($appRoot) + 1));
            if (class_exists($class)) {
                Assert::assertTrue(class_exists($class));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
                $count++;
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
                $count++;
=======
                ++$count;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
                ++$count;
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
                $count++;
>>>>>>> laraxot/dev
=======
                ++$count;
>>>>>>> laraxot/dev
            }
        }
        Assert::assertGreaterThan(0, $count);
    });
});

describe('UI coverage boost — Enums', function (): void {
    test('FieldTypeEnum form schema exposes all cases', function (): void {
        $schema = FieldTypeEnum::getFormSchema();
        Assert::assertCount(count(FieldTypeEnum::cases()), $schema);
    });

    test('TableLayout toArray maps values to labels', function (): void {
        Assert::assertArrayHasKey('list', TableLayout::toArray());
    });
});

describe('UI coverage boost — Rules and policies', function (): void {
    test('OpeningHoursRule accepts empty array value', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
        $rule = new OpeningHoursRule;
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
        $rule = new OpeningHoursRule;
=======
        $rule = new OpeningHoursRule();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9d9W37
=======
=======
        $rule = new OpeningHoursRule();
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
        $rule = new OpeningHoursRule;
>>>>>>> laraxot/dev
=======
        $rule = new OpeningHoursRule();
>>>>>>> laraxot/dev
        $failed = false;
        $rule->validate(
            'hours',
            [],
            static function (string $message, ?string $replace = null) use (&$failed): PotentiallyTranslatedString {
                $failed = true;

                return new PotentiallyTranslatedString($message, app('translator'));
            },
        );
        Assert::assertFalse($failed);
    });

    test('UiBasePolicy before grants super-admin', function (): void {
        /** @var MockInterface&UserContract $superAdmin */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
>>>>>>> .merge_file_n10oqa
=======
>>>>>>> laraxot/dev
        $superAdmin = Mockery::mock(UserContract::class);
        TestCase::expectMethod($superAdmin, 'hasRole')->with('super-admin')->andReturn(true);
        /** @var MockInterface&UserContract $regular */
        $regular = Mockery::mock(UserContract::class);
        TestCase::expectMethod($regular, 'hasRole')->with('super-admin')->andReturn(false);

        $policy = new class extends UiBasePolicy {};
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
=======
=======
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
=======
>>>>>>> laraxot/dev
        $superAdmin = \Mockery::mock(UserContract::class);
        TestCase::expectMethod($superAdmin, 'hasRole')->with('super-admin')->andReturn(true);
        /** @var MockInterface&UserContract $regular */
        $regular = \Mockery::mock(UserContract::class);
        TestCase::expectMethod($regular, 'hasRole')->with('super-admin')->andReturn(false);

        $policy = new class extends UiBasePolicy {
        };
<<<<<<< HEAD
<<<<<<< .merge_file_9d9W37
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        Assert::assertTrue($policy->before($superAdmin, 'viewAny'));
        Assert::assertNull($policy->before($regular, 'viewAny'));
    });
});

describe('UI coverage boost — Models and providers', function (): void {
    test('Category fillable matches domain fields', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
>>>>>>> .merge_file_n10oqa
=======
>>>>>>> laraxot/dev
        Assert::assertContains('name', (new Category)->getFillable());
    });

    test('StatsOverviewWidget declares heading', function (): void {
        $widget = new StatsOverviewWidget;
<<<<<<< HEAD
<<<<<<< .merge_file_gTbWCq
=======
=======
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
=======
>>>>>>> laraxot/dev
        Assert::assertContains('name', (new Category())->getFillable());
    });

    test('StatsOverviewWidget declares heading', function (): void {
        $widget = new StatsOverviewWidget();
<<<<<<< HEAD
<<<<<<< .merge_file_9d9W37
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        $ref = new \ReflectionClass($widget);
        $prop = $ref->getProperty('heading');
        $prop->setAccessible(true);
        Assert::assertSame('Stats Overview', $prop->getValue($widget));
    });

    test('UIServiceProvider declares module name', function (): void {
        Assert::assertSame('UI', (new UIServiceProvider(app()))->name);
    });
});
