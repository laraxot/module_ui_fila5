<?php

declare(strict_types=1);

/**
 * ----------------------------------------------------------------.
 */

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
>>>>>>> 6e44b7d5 (.)

abstract class UiBasePolicy
{
    use HandlesAuthorization;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function before(UserContract $user, string $_ability): ?bool
    {
<<<<<<< HEAD
=======
        $xotData = XotData::make();
>>>>>>> 6e44b7d5 (.)
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
