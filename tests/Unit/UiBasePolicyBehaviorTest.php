<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

<<<<<<< .merge_file_Mqq86W
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J3sTzH
use Mockery\MockInterface;
use Modules\UI\Tests\Fixtures\UiBasePolicyBehaviorConcretePolicy;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use PHPUnit\Framework\Assert;

uses(TestCase::class)->group('no-ui-db');

/**
<<<<<<< .merge_file_Mqq86W
<<<<<<< HEAD
 * @param  list<string>  $roles
=======
 * @param list<string> $roles
 *
>>>>>>> laraxot/dev
=======
 * @param list<string> $roles
 *
>>>>>>> .merge_file_J3sTzH
 * @return MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var MockInterface&UserContract $user */
<<<<<<< .merge_file_Mqq86W
<<<<<<< HEAD
    $user = Mockery::mock(UserContract::class);
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> laraxot/dev
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> .merge_file_J3sTzH
    TestCase::expectMethod($user, 'hasRole')
        ->andReturnUsing(static function (array|string $richiesti) use ($roles): bool {
            /** @var list<string> $normalizzati */
            $normalizzati = is_array($richiesti) ? $richiesti : [$richiesti];

<<<<<<< .merge_file_Mqq86W
<<<<<<< HEAD
            return array_intersect($normalizzati, $roles) !== [];
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> laraxot/dev
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> .merge_file_J3sTzH
        });

    return $user;
}

afterEach(function (): void {
<<<<<<< .merge_file_Mqq86W
<<<<<<< HEAD
    Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy;
=======
=======
>>>>>>> .merge_file_J3sTzH
    \Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy();
<<<<<<< .merge_file_Mqq86W
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J3sTzH
    $super = uiBehaviorUser(['super-admin']);

    Assert::assertTrue($policy->before($super, 'viewAny'));
    Assert::assertNull($policy->before(uiBehaviorUser(), 'viewAny'));
});
