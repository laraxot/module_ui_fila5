<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

<<<<<<< .merge_file_AEw819
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VvrOHu
use Modules\UI\Tests\TestCase;
use Modules\Xot\Tests\ModuleBusinessCoverage;

uses(TestCase::class);

afterEach(function (): void {
<<<<<<< .merge_file_AEw819
<<<<<<< HEAD
    Mockery::close();
=======
    \Mockery::close();
>>>>>>> laraxot/dev
=======
    \Mockery::close();
>>>>>>> .merge_file_VvrOHu
});

/** @return list{string, string} */
function uiBusinessContext(): array
{
    return [dirname(__DIR__, 2).'/app', 'Modules\\UI\\'];
}

describe('UI business coverage', function (): void {
    test('all policies execute authorization methods', function (): void {
        [$appRoot, $ns] = uiBusinessContext();
        ModuleBusinessCoverage::testAllPolicies($appRoot, $ns);
    });

    test('all models expose table and fillable', function (): void {
        [$appRoot, $ns] = uiBusinessContext();
        ModuleBusinessCoverage::testAllModels($appRoot, $ns);
    });

    test('all actions are resolvable', function (): void {
        [$appRoot, $ns] = uiBusinessContext();
        ModuleBusinessCoverage::testAllActions($appRoot, $ns);
    });

    test('all datas are loadable', function (): void {
        [$appRoot, $ns] = uiBusinessContext();
        ModuleBusinessCoverage::testAllDatas($appRoot, $ns);
    });
});
