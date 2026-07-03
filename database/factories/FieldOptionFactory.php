<?php

declare(strict_types=1);

namespace Modules\UI\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\UI\Models\FieldOption;

<<<<<<< HEAD
/**
 * @extends Factory<FieldOption>
 */
=======
>>>>>>> c001364 (.)
class FieldOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = FieldOption::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
    }
}
