<?php

declare(strict_types=1);

namespace Modules\UI\Data;

use Spatie\LaravelData\Data;

final class UserData extends Data
{
    /**
<<<<<<< HEAD
     * @param  array<int, string>  $permissions
     * @param  array<string, mixed>  $settings
=======
     * @param array<int, string>   $permissions
     * @param array<string, mixed> $settings
>>>>>>> laraxot/dev
     */
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings,
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> laraxot/dev
}
