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
<<<<<<< .merge_file_E3LYIR
    public mixed $profile = null;
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======
    public ?object $profile = null;

>>>>>>> .merge_file_14fUIj
    public function relationLoaded($key): bool
    {
        if (! is_string($key)) {
            return false;
        }

<<<<<<< .merge_file_E3LYIR
<<<<<<< HEAD
        return $key === 'profile' && $this->profile !== null;
=======
        return 'profile' === $key && null !== $this->profile;
>>>>>>> laraxot/dev
=======
        return 'profile' === $key && null !== $this->profile;
>>>>>>> .merge_file_14fUIj
    }

    /**
     * @return Collection<int, string>
     */
    public function getRoleNames(): Collection
    {
        return collect(['admin']);
    }
<<<<<<< .merge_file_E3LYIR
<<<<<<< HEAD
}
=======
}
>>>>>>> laraxot/dev
=======
}
>>>>>>> .merge_file_14fUIj
