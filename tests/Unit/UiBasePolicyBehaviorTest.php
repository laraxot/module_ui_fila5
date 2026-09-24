<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

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
use Mockery\MockInterface;
use Modules\UI\Tests\Fixtures\UiBasePolicyBehaviorConcretePolicy;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use PHPUnit\Framework\Assert;

uses(TestCase::class)->group('no-ui-db');

/**
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
 * @return MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var MockInterface&UserContract $user */
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
    TestCase::expectMethod($user, 'hasRole')
        ->andReturnUsing(static function (array|string $richiesti) use ($roles): bool {
            /** @var list<string> $normalizzati */
            $normalizzati = is_array($richiesti) ? $richiesti : [$richiesti];

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
        });

    return $user;
}

afterEach(function (): void {
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
<<<<<<< HEAD
    Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy;
=======
<<<<<<< .merge_file_QTU83L
=======
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
    \Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy();
<<<<<<< .merge_file_QTU83L
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
    $super = uiBehaviorUser(['super-admin']);

    Assert::assertTrue($policy->before($super, 'viewAny'));
    Assert::assertNull($policy->before(uiBehaviorUser(), 'viewAny'));
});
