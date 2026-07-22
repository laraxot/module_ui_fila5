<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 */

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;

abstract class UiBasePolicy
{
    use HandlesAuthorization;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): ?bool
=======
    public function before(UserContract $user, string $ability): ?bool
>>>>>>> dfac49d (.)
=======
    public function before(UserContract $user, string $_ability): ?bool
>>>>>>> dfbb8305 (.)
    {
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
