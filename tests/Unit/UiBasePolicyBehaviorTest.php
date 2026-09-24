<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
use Mockery;
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
use Mockery\MockInterface;
use Modules\UI\Tests\Fixtures\UiBasePolicyBehaviorConcretePolicy;
use Modules\UI\Tests\TestCase;
use Modules\Xot\Contracts\UserContract;
use PHPUnit\Framework\Assert;

uses(TestCase::class)->group('no-ui-db');

/**
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
 * @param  list<string>  $roles
=======
 * @param list<string> $roles
 *
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
=======
 * @param list<string> $roles
 *
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
 * @return MockInterface&UserContract
 */
function uiBehaviorUser(array $roles = []): UserContract
{
    /** @var MockInterface&UserContract $user */
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
    $user = Mockery::mock(UserContract::class);
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
=======
    $user = \Mockery::mock(UserContract::class);
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
    TestCase::expectMethod($user, 'hasRole')
        ->andReturnUsing(static function (array|string $richiesti) use ($roles): bool {
            /** @var list<string> $normalizzati */
            $normalizzati = is_array($richiesti) ? $richiesti : [$richiesti];

<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
            return array_intersect($normalizzati, $roles) !== [];
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
=======
            return [] !== array_intersect($normalizzati, $roles);
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
        });

    return $user;
}

afterEach(function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
<<<<<<< .merge_file_Mqq86W
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
    Mockery::close();
});

test('UiBasePolicy before concede super-admin e ritorna null altrimenti', function (): void {
    $policy = new UiBasePolicyBehaviorConcretePolicy;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_QTU83L
=======
=======
>>>>>>> .merge_file_J3sTzH
>>>>>>> .merge_file_9HuASr
=======
>>>>>>> 0dadab4 (Lint)
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
=======
>>>>>>> laraxot/dev
>>>>>>> 0dadab4 (Lint)
    $super = uiBehaviorUser(['super-admin']);

    Assert::assertTrue($policy->before($super, 'viewAny'));
    Assert::assertNull($policy->before(uiBehaviorUser(), 'viewAny'));
});
