<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\User\Models\User;
=======
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Support\Collection;
>>>>>>> laraxot/dev

/**
 * User in-memory per GetUserDataAction — evita Mockery property.notFound.
 */
<<<<<<< HEAD
final class UiCoverageAuthUser extends User
{
    public ?object $profile = null;

    public function relationLoaded($key): bool
    {
=======
final class UiCoverageAuthUser extends AuthenticatableUser
{
    public mixed $profile = null;
    public function relationLoaded($key): bool
    {
        if (! is_string($key)) {
            return false;
        }

>>>>>>> laraxot/dev
        return $key === 'profile' && $this->profile !== null;
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
