<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

<<<<<<< HEAD
<<<<<<< .merge_file_hQyAkc
=======
<<<<<<< .merge_file_AEw819
>>>>>>> .merge_file_pRtxZS
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_hQyAkc
=======
=======
>>>>>>> .merge_file_VvrOHu
>>>>>>> .merge_file_pRtxZS
=======
>>>>>>> 0dadab4 (Lint)
use Modules\UI\Tests\TestCase;
use Modules\Xot\Tests\ModuleBusinessCoverage;

uses(TestCase::class);

afterEach(function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_hQyAkc
=======
<<<<<<< .merge_file_AEw819
>>>>>>> .merge_file_pRtxZS
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
    Mockery::close();
=======
    \Mockery::close();
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_hQyAkc
=======
=======
    \Mockery::close();
>>>>>>> .merge_file_VvrOHu
>>>>>>> .merge_file_pRtxZS
=======
>>>>>>> 0dadab4 (Lint)
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
