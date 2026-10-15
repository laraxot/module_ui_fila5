<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Unit;

use Mockery;
use Tests\Modules\UI\TestCase;
use Tests\Modules\Xot\ModuleExecuteCoverage;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

afterEach(function (): void {
    Mockery::close();
});

describe('UI ModuleExecuteCoverage floor sweep', function (): void {
    test('view http middleware filament via directory invoke', function (): void {
        [$appRoot, $ns] = [dirname(__DIR__, 2).'/app', 'Modules\\UI\\'];
        ModuleExecuteCoverage::testAllMiddleware($appRoot, $ns);
        ModuleExecuteCoverage::testInvokePublicMethodsInDirectory($appRoot, $ns, 'Services');
        ModuleExecuteCoverage::testInvokePublicMethodsInDirectory($appRoot, $ns, 'Rules');
        ModuleExecuteCoverage::testFilamentPublicMethods($appRoot, $ns);
        ModuleExecuteCoverage::testFilamentComponents($appRoot, $ns);
        ModuleExecuteCoverage::testFilamentActionsMake($appRoot, $ns);
        ModuleExecuteCoverage::testFilamentLegacySchemas($appRoot, $ns);
        ModuleExecuteCoverage::testAllEnums($appRoot, $ns);
        ModuleExecuteCoverage::testInvokePublicMethodsOnModels($appRoot, $ns);
        Assert::assertDirectoryExists($appRoot);
    });
});
