<?php

declare(strict_types=1);

namespace Modules\UI\Actions;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_YM9JS4
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\UI\Datas\UserData;
<<<<<<< .merge_file_ZxcNIN
use Modules\User\Models\User;
<<<<<<< .merge_file_YM9JS4
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
>>>>>>> laraxot/dev
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\UI\Datas\UserData;
use Modules\User\Models\Profile;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\User\Models\User;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Contracts\UserContract;
<<<<<<< .merge_file_YM9JS4
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\User\Models\Profile;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Contracts\UserContract;
>>>>>>> .merge_file_C2T0Nu
>>>>>>> .merge_file_jhelL8
>>>>>>> laraxot/dev
use Spatie\Permission\Contracts\Permission;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

    public function execute(): ?UserData
    {
        $user = Auth::user();

        if (! $user instanceof UserContract) {
            return null;
        }

<<<<<<< HEAD
=======
<<<<<<< .merge_file_YM9JS4
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZxcNIN
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
        // PHPStan L10: tenancy() è helper function, ma PHPStan non la riconosce
        // Rimuoviamo questa logica se non è necessaria per GetUserDataAction
        // Se necessario, usare Filament::getTenant() invece
=======
>>>>>>> laraxot/dev
        $avatar = null;
        $profile = $user->relationLoaded('profile') ? $user->profile : null;
        if ($profile instanceof Profile) {
            $avatarUrl = $profile->getAvatarUrl();
<<<<<<< HEAD
            $avatar = $avatarUrl !== '' ? $avatarUrl : null;
        }

        if ($avatar === null) {
            $profilePhotoPath = $user->getAttribute('profile_photo_path');
            if (is_string($profilePhotoPath) && $profilePhotoPath !== '') {
=======
            $avatar = '' !== $avatarUrl ? $avatarUrl : null;
        }
>>>>>>> .merge_file_C2T0Nu

        if (null === $avatar) {
            $profilePhotoPath = $user->getAttribute('profile_photo_path');
            if (is_string($profilePhotoPath) && '' !== $profilePhotoPath) {
>>>>>>> laraxot/dev
                $avatar = $profilePhotoPath;
            }
        }

<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZxcNIN
        // PHPStan L10: getRoleNames() restituisce Collection, ma PHPStan non lo riconosce dal trait
<<<<<<< .merge_file_YM9JS4
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
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

<<<<<<< .merge_file_YM9JS4
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_C2T0Nu
>>>>>>> .merge_file_jhelL8
>>>>>>> laraxot/dev
        /** @var Collection<int, string> $roleNames */
        $roleNames = $user->getRoleNames();
        $firstRole = $roleNames->isNotEmpty() ? $roleNames->first() : null;
        $roleValue = is_string($firstRole) ? $firstRole : null;

<<<<<<< HEAD
=======
<<<<<<< .merge_file_YM9JS4
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZxcNIN
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
        // Get settings - could be in profile or extra attributes
=======
>>>>>>> .merge_file_C2T0Nu
>>>>>>> laraxot/dev
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

<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZxcNIN
        // PHPStan L10: getAllPermissions() restituisce Collection, ma PHPStan non lo riconosce dal trait
        // method_exists() è sempre true perché User ha HasPermissions trait
<<<<<<< .merge_file_YM9JS4
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
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

<<<<<<< .merge_file_YM9JS4
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_C2T0Nu
>>>>>>> .merge_file_jhelL8
>>>>>>> laraxot/dev
        /** @var Collection<int, Permission> $allPermissions */
        $allPermissions = $user->getAllPermissions();
        /** @var array<int, string> $permissions */
        $permissions = $allPermissions->pluck('name')->toArray();

<<<<<<< HEAD
=======
<<<<<<< .merge_file_YM9JS4
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZxcNIN
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        $userName = $user->name;
        $userEmail = $user->email;

>>>>>>> .merge_file_C2T0Nu
        return new UserData(
            id: SafeIntCastAction::cast($user->id),
            name: is_string($userName) ? $userName : '',
            email: is_string($userEmail) ? $userEmail : '',
            avatar: $avatar,
            role: $roleValue,
            permissions: $permissions,
            settings: $settingsArray,
        );
    }
}
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        $userName = property_exists($user, 'name') ? $user->name : null;
        $userEmail = property_exists($user, 'email') ? $user->email : null;

>>>>>>> .merge_file_jhelL8
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
<<<<<<< HEAD
}
=======
}
<<<<<<< .merge_file_YM9JS4
=======
>>>>>>> laraxot/dev
        $userName = property_exists($user, 'name') ? $user->name : null;
        $userEmail = property_exists($user, 'email') ? $user->email : null;

        return new UserData(
            id: SafeIntCastAction::cast($user->id),
            name: is_string($userName) ? $userName : '',
            email: is_string($userEmail) ? $userEmail : '',
<<<<<<< HEAD
            avatar: is_string($avatar) ? $avatar : null,
=======
            avatar: $avatarValue,
>>>>>>> laraxot/dev
            role: $roleValue,
            permissions: $permissions,
            settings: $settingsArray,
        );
    }
}
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jhelL8
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
