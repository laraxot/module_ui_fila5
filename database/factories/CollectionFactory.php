<?php

declare(strict_types=1);

namespace Modules\UI\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\UI\Models\Collection;

<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * @extends Factory<Collection>
 */
>>>>>>> 40b96bcd6 (.)
=======
/**
 * @extends Factory<Collection>
 */
>>>>>>> origin/dev
class CollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Collection::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
=======
=======
>>>>>>> origin/dev
        return [
            'name' => fake()->words(2, true),
            'type' => 'block',
            'theme_id' => 1,
            'is_active' => true,
            'order' => 0,
        ];
<<<<<<< HEAD
>>>>>>> 40b96bcd6 (.)
=======
>>>>>>> origin/dev
    }
}
