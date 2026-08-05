<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Spatie\LaravelData\Data;

class UserData extends Data
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    /**
     * @param array<int, string>   $permissions
     * @param array<string, mixed> $settings
     */
<<<<<<< HEAD
=======
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings,
<<<<<<< HEAD
    ) {
    }
=======
<<<<<<< HEAD
    ) {
    }
=======
    ) {}
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
}
