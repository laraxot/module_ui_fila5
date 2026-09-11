<?php

declare(strict_types=1);

namespace Modules\UI\Actions;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\UI\Datas\UserData;
use Modules\User\Models\Profile;
use Modules\User\Models\User;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\UserContract;
=======
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\UI\Datas\UserData;
use Modules\User\Models\User;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
>>>>>>> laraxot/dev
use Spatie\Permission\Contracts\Permission;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

    public function execute(): ?UserData
    {
        $user = Auth::user();

        if (! $user instanceof User) {
            return null;
        }

<<<<<<< HEAD
        $avatarValue = null;
        $profile = $user->relationLoaded('profile') ? $user->profile : null;
        if ($profile instanceof Profile) {
            $avatarUrl = $profile->getAvatarUrl();
            $avatarValue = $avatarUrl !== '' ? $avatarUrl : null;
        }

        $profilePhotoPath = property_exists($user, 'profile_photo_path') ? $user->profile_photo_path : null;
        if (null === $avatarValue && is_string($profilePhotoPath) && $profilePhotoPath !== '') {
            $avatarValue = $profilePhotoPath;
        }

=======
        // PHPStan L10: tenancy() è helper function, ma PHPStan non la riconosce
        // Rimuoviamo questa logica se non è necessaria per GetUserDataAction
        // Se necessario, usare Filament::getTenant() invece

        // Get avatar from profile_photo_path or profile relation
        $avatarValue = null;
        if (isset($user->profile_photo_path) && is_string($user->profile_photo_path)) {
            $avatarValue = $user->profile_photo_path;
        } elseif ($user->relationLoaded('profile') && $user->profile !== null) {
            $profile = $user->profile;
            if (is_object($profile) && method_exists($profile, 'getAvatarUrl')) {
                $avatarValue = $profile->getAvatarUrl();
            } elseif (is_object($profile) && isset($profile->avatar) && is_string($profile->avatar)) {
                $avatarValue = $profile->avatar;
            }
        }

        // PHPStan L10: getRoleNames() restituisce Collection, ma PHPStan non lo riconosce dal trait
>>>>>>> laraxot/dev
        /** @var Collection<int, string> $roleNames */
        $roleNames = $user->getRoleNames();
        $firstRole = $roleNames->isNotEmpty() ? $roleNames->first() : null;
        $roleValue = is_string($firstRole) ? $firstRole : null;

<<<<<<< HEAD
        /** @var array<string, mixed> $settingsArray */
        $settingsArray = [];
        if ($profile instanceof Profile && isset($profile->extra)) {
            $extra = $profile->extra;
            if (is_array($extra)) {
                /** @var array<string, mixed> $typedExtra */
                $typedExtra = $extra;
                $settingsArray = $typedExtra;
            }
        }

=======
        // Get settings - could be in profile or extra attributes
        /** @var array<string, mixed> $settingsArray */
        $settingsArray = [];
        if ($user->relationLoaded('profile') && $user->profile !== null) {
            $profile = $user->profile;
            if (is_object($profile) && isset($profile->extra)) {
                $extra = $profile->extra;
                if (is_array($extra)) {
                    /** @var array<string, mixed> $typedExtra */
                    $typedExtra = $extra;
                    $settingsArray = $typedExtra;
                }
            }
        }

        // PHPStan L10: getAllPermissions() restituisce Collection, ma PHPStan non lo riconosce dal trait
        // method_exists() è sempre true perché User ha HasPermissions trait
>>>>>>> laraxot/dev
        /** @var Collection<int, Permission> $allPermissions */
        $allPermissions = $user->getAllPermissions();
        /** @var array<int, string> $permissions */
        $permissions = $allPermissions->pluck('name')->toArray();

<<<<<<< HEAD
        $userName = property_exists($user, 'name') ? $user->name : null;
        $userEmail = property_exists($user, 'email') ? $user->email : null;

        return new UserData(
            id: SafeIntCastAction::cast($user->id),
            name: is_string($userName) ? $userName : '',
            email: is_string($userEmail) ? $userEmail : '',
            avatar: $avatarValue,
            role: $roleValue,
            permissions: $permissions,
            settings: $settingsArray,
        );
    }
}
=======
        return new UserData(
            id: SafeIntCastAction::cast($user->id),
            name: SafeStringCastAction::cast($user->name ?? ''),
            email: SafeStringCastAction::cast($user->email ?? ''),
            avatar: $avatarValue !== null ? SafeStringCastAction::cast($avatarValue) : null,
            role: $roleValue !== null ? (string) $roleValue : null,
            permissions: $permissions ?? [],
            settings: $settingsArray,
        );
    }
}
>>>>>>> laraxot/dev
