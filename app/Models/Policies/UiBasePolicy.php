<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
/**
 * ----------------------------------------------------------------.
 */

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
>>>>>>> laraxot/dev
=======
use Modules\Xot\Datas\XotData;
>>>>>>> 0dadab4 (Lint)

abstract class UiBasePolicy
{
    use HandlesAuthorization;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function before(UserContract $user, string $_ability): ?bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $xotData = XotData::make();
=======
>>>>>>> laraxot/dev
=======
        $xotData = XotData::make();
>>>>>>> 0dadab4 (Lint)
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
