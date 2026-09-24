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
    public mixed $profile = null;
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
    public function relationLoaded($key): bool
    {
        if (! is_string($key)) {
            return false;
        }

<<<<<<< HEAD
        return $key === 'profile' && $this->profile !== null;
=======
        return 'profile' === $key && null !== $this->profile;
>>>>>>> laraxot/dev
    }

    /**
     * @return Collection<int, string>
     */
    public function getRoleNames(): Collection
    {
        return collect(['admin']);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> laraxot/dev
