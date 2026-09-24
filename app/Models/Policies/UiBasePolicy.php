<?php

declare(strict_types=1);
<<<<<<< .merge_file_48En8A
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_5jpv0i
/**
 * ----------------------------------------------------------------.
 */

namespace Modules\UI\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Xot\Contracts\UserContract;
<<<<<<< .merge_file_48En8A
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
use Modules\Xot\Datas\XotData;
>>>>>>> .merge_file_5jpv0i

abstract class UiBasePolicy
{
    use HandlesAuthorization;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function before(UserContract $user, string $_ability): ?bool
    {
<<<<<<< .merge_file_48En8A
<<<<<<< HEAD
<<<<<<< HEAD
        $xotData = XotData::make();
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
        $xotData = XotData::make();
>>>>>>> .merge_file_5jpv0i
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
