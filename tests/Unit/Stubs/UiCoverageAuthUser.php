<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Support\Collection;

/**
 * User in-memory per GetUserDataAction — evita Mockery property.notFound.
 */
final class UiCoverageAuthUser extends AuthenticatableUser
{
<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
<<<<<<< .merge_file_E3LYIR
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
    public mixed $profile = null;
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
=======
    public ?object $profile = null;

>>>>>>> .merge_file_14fUIj
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
    public function relationLoaded($key): bool
    {
        if (! is_string($key)) {
            return false;
        }

<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
<<<<<<< .merge_file_E3LYIR
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
        return $key === 'profile' && $this->profile !== null;
=======
        return 'profile' === $key && null !== $this->profile;
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
=======
        return 'profile' === $key && null !== $this->profile;
>>>>>>> .merge_file_14fUIj
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
    }

    /**
     * @return Collection<int, string>
     */
    public function getRoleNames(): Collection
    {
        return collect(['admin']);
    }
<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
<<<<<<< .merge_file_E3LYIR
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
}
=======
}
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_No0RQY
=======
=======
}
>>>>>>> .merge_file_14fUIj
>>>>>>> .merge_file_i6sbIH
=======
>>>>>>> 0dadab4 (Lint)
