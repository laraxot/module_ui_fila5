<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
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
>>>>>>> laraxot/dev

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
>>>>>>> laraxot/dev
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
