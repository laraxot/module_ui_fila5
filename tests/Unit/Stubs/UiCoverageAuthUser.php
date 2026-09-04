<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Support\Collection;
use Modules\Xot\Contracts\UserContract;

/**
 * User in-memory per GetUserDataAction — evita Mockery property.notFound.
 */
final class UiCoverageAuthUser extends \Illuminate\Foundation\Auth\User
{
    public mixed $profile = null;

    #[\Override]
    public function relationLoaded(mixed $key): bool
    {
        if (! is_string($key)) {
            return false;
        }

        return $key === 'profile' && $this->profile !== null;
    }

        return $key === 'profile' && $this->profile !== null;
    }

    /**
     * @return Collection<int, string>
     */
    public function getRoleNames(): Collection
    {
        return collect(['admin']);
    }
}