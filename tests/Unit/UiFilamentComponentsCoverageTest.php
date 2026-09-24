<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

use Illuminate\Translation\PotentiallyTranslatedString;
<<<<<<< .merge_file_M1JmiX
use Mockery;
=======
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
>>>>>>> .merge_file_Zq5Xbm
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
<<<<<<< .merge_file_M1JmiX
use SplFileInfo;
=======
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
>>>>>>> .merge_file_Zq5Xbm

uses(TestCase::class);

afterEach(function (): void {
<<<<<<< .merge_file_M1JmiX
    \Mockery::close();
=======
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
>>>>>>> .merge_file_Zq5Xbm
});

describe('UI Filament widgets and components coverage', function (): void {
    test('Filament widgets are instantiable', function (): void {
        [$appRoot, $ns] = [dirname(__DIR__, 2).'/app', 'Modules\\UI\\'];
        $seen = 0;
        foreach (FilamentSchemaCoverage::discover($appRoot, $ns, 'Widget') as $class) {
            if (! str_contains($class, 'Filament\\Widgets\\')) {
                continue;
            }
<<<<<<< .merge_file_M1JmiX
            Assert::assertInstanceOf($class, new $class);
            $seen++;
=======
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
>>>>>>> .merge_file_Zq5Xbm
        }
        Assert::assertGreaterThan(0, $seen);
    });

    test('Filament form components are loadable', function (): void {
        [$appRoot] = [dirname(__DIR__, 2).'/app'];
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($appRoot.'/Filament/Forms'));
        $count = 0;
        foreach ($iterator as $file) {
<<<<<<< .merge_file_M1JmiX
            if (! $file instanceof SplFileInfo || ! $file->isFile() || ! str_ends_with($file->getFilename(), '.php')) {
=======
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
>>>>>>> .merge_file_Zq5Xbm
                continue;
            }
            $class = 'Modules\\UI\\'.str_replace(['/', '.php'], ['\\', ''], substr($file->getPathname(), strlen($appRoot) + 1));
            if (class_exists($class)) {
                Assert::assertTrue(class_exists($class));
<<<<<<< .merge_file_M1JmiX
                $count++;
=======
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
>>>>>>> .merge_file_Zq5Xbm
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
<<<<<<< .merge_file_M1JmiX
        $rule = new OpeningHoursRule;
=======
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
>>>>>>> .merge_file_Zq5Xbm
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
<<<<<<< .merge_file_M1JmiX
=======
<<<<<<< .merge_file_gTbWCq
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
>>>>>>> .merge_file_n10oqa
>>>>>>> .merge_file_Zq5Xbm
        $superAdmin = Mockery::mock(UserContract::class);
        TestCase::expectMethod($superAdmin, 'hasRole')->with('super-admin')->andReturn(true);
        /** @var MockInterface&UserContract $regular */
        $regular = Mockery::mock(UserContract::class);
        TestCase::expectMethod($regular, 'hasRole')->with('super-admin')->andReturn(false);

        $policy = new class extends UiBasePolicy {};
<<<<<<< .merge_file_M1JmiX
=======
<<<<<<< .merge_file_gTbWCq
=======
=======
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
        $superAdmin = \Mockery::mock(UserContract::class);
        TestCase::expectMethod($superAdmin, 'hasRole')->with('super-admin')->andReturn(true);
        /** @var MockInterface&UserContract $regular */
        $regular = \Mockery::mock(UserContract::class);
        TestCase::expectMethod($regular, 'hasRole')->with('super-admin')->andReturn(false);

        $policy = new class extends UiBasePolicy {
        };
<<<<<<< .merge_file_9d9W37
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
>>>>>>> .merge_file_Zq5Xbm
        Assert::assertTrue($policy->before($superAdmin, 'viewAny'));
        Assert::assertNull($policy->before($regular, 'viewAny'));
    });
});

describe('UI coverage boost — Models and providers', function (): void {
    test('Category fillable matches domain fields', function (): void {
<<<<<<< .merge_file_M1JmiX
=======
<<<<<<< .merge_file_gTbWCq
=======
<<<<<<< .merge_file_9d9W37
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> .merge_file_f1BPAC
<<<<<<< HEAD
>>>>>>> .merge_file_n10oqa
>>>>>>> .merge_file_Zq5Xbm
        Assert::assertContains('name', (new Category)->getFillable());
    });

    test('StatsOverviewWidget declares heading', function (): void {
        $widget = new StatsOverviewWidget;
<<<<<<< .merge_file_M1JmiX
=======
<<<<<<< .merge_file_gTbWCq
=======
=======
<<<<<<< .merge_file_9d9W37
=======
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
        Assert::assertContains('name', (new Category())->getFillable());
    });

    test('StatsOverviewWidget declares heading', function (): void {
        $widget = new StatsOverviewWidget();
<<<<<<< .merge_file_9d9W37
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_RJtMwC
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JKXZzI
>>>>>>> .merge_file_f1BPAC
>>>>>>> .merge_file_n10oqa
>>>>>>> .merge_file_Zq5Xbm
        $ref = new \ReflectionClass($widget);
        $prop = $ref->getProperty('heading');
        $prop->setAccessible(true);
        Assert::assertSame('Stats Overview', $prop->getValue($widget));
    });

    test('UIServiceProvider declares module name', function (): void {
        Assert::assertSame('UI', (new UIServiceProvider(app()))->name);
    });
});
