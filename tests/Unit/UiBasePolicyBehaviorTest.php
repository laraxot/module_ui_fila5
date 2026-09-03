<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

use Mockery;
<<<<<<< HEAD
use Modules\UI\Models\Policies\UiBasePolicy;
=======
use Mockery\MockInterface;
use Modules\UI\Tests\Fixtures\UiBasePolicyBehaviorConcretePolicy;
>>>>>>> laraxot/dev
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use PHPUnit\Framework\Assert;

uses(TestCase::class)->group('no-ui-db');

/**
 * @param  list<string>  $roles
<<<<<<< HEAD
 * @return Mockery\MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var Mockery\MockInterface&UserContract $user */
    $user = Mockery::mock(UserContract::class);
    $user->shouldReceive('hasRole')
=======
 * @return MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var MockInterface&UserContract $user */
    $user = Mockery::mock(UserContract::class);
    TestCase::expectMethod($user, 'hasRole')
>>>>>>> laraxot/dev
        ->andReturnUsing(static function (array|string $richiesti) use ($roles): bool {
            /** @var list<string> $normalizzati */
            $normalizzati = is_array($richiesti) ? $richiesti : [$richiesti];

            return array_intersect($normalizzati, $roles) !== [];
        });

    return $user;
}

afterEach(function (): void {
    Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
<<<<<<< HEAD
    $policy = new UiBasePolicyBehaviorConcretePolicy();
=======
    $policy = new UiBasePolicyBehaviorConcretePolicy;
>>>>>>> laraxot/dev
    $super = uiBehaviorUser(['super-admin']);

    Assert::assertTrue($policy->before($super, 'viewAny'));
    Assert::assertNull($policy->before(uiBehaviorUser(), 'viewAny'));
});
<<<<<<< HEAD

final class UiBasePolicyBehaviorConcretePolicy extends UiBasePolicy {}
=======
>>>>>>> laraxot/dev
