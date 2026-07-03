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
>>>>>>> c001364 (.)

abstract class UiBasePolicy
{
    use HandlesAuthorization;

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
<<<<<<< HEAD
    public function before(UserContract $user, string $ability): ?bool
    {
=======
    public function before(UserContract $user, string $_ability): ?bool
    {
        $xotData = XotData::make();
>>>>>>> c001364 (.)
        if ($user->hasRole('super-admin')) {
            return true;
        }

        return null;
    }
}
