<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
use Mockery;
=======
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_QTU83L
=======
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
>>>>>>> .merge_file_cKvySY
=======
use Mockery;
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Mockery\MockInterface;
use Modules\UI\Tests\Fixtures\UiBasePolicyBehaviorConcretePolicy;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use PHPUnit\Framework\Assert;

uses(TestCase::class)->group('no-ui-db');

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
 * @param  list<string>  $roles
=======
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
 * @param  list<string>  $roles
=======
 * @param list<string> $roles
 *
>>>>>>> laraxot/dev
<<<<<<< .merge_file_QTU83L
=======
=======
 * @param list<string> $roles
 *
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
>>>>>>> .merge_file_cKvySY
=======
 * @param  list<string>  $roles
>>>>>>> laraxot/dev
=======
 * @param list<string> $roles
 *
>>>>>>> laraxot/dev
 * @return MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var MockInterface&UserContract $user */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
    $user = Mockery::mock(UserContract::class);
=======
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
    $user = Mockery::mock(UserContract::class);
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_QTU83L
=======
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
>>>>>>> .merge_file_cKvySY
=======
    $user = Mockery::mock(UserContract::class);
>>>>>>> laraxot/dev
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> laraxot/dev
    TestCase::expectMethod($user, 'hasRole')
        ->andReturnUsing(static function (array|string $richiesti) use ($roles): bool {
            /** @var list<string> $normalizzati */
            $normalizzati = is_array($richiesti) ? $richiesti : [$richiesti];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
            return array_intersect($normalizzati, $roles) !== [];
=======
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
            return array_intersect($normalizzati, $roles) !== [];
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_QTU83L
=======
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
>>>>>>> .merge_file_cKvySY
=======
            return array_intersect($normalizzati, $roles) !== [];
>>>>>>> laraxot/dev
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> laraxot/dev
        });

    return $user;
}

afterEach(function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
=======
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
>>>>>>> .merge_file_cKvySY
=======
>>>>>>> laraxot/dev
    Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy;
<<<<<<< HEAD
<<<<<<< .merge_file_TWc7Nt
=======
=======
<<<<<<< .merge_file_QTU83L
=======
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> laraxot/dev
    \Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy();
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
>>>>>>> .merge_file_cKvySY
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    $super = uiBehaviorUser(['super-admin']);

    Assert::assertTrue($policy->before($super, 'viewAny'));
    Assert::assertNull($policy->before(uiBehaviorUser(), 'viewAny'));
});
