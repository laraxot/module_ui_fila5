<?php

declare(strict_types=1);

namespace Modules\UI\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\UI\Models\Collection;

<<<<<<< HEAD
/**
 * @extends Factory<Collection>
 */
=======
<<<<<<< HEAD
/**
 * @extends Factory<Collection>
 */
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
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
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        return [
            'name' => fake()->words(2, true),
            'type' => 'block',
            'theme_id' => 1,
            'is_active' => true,
            'order' => 0,
        ];
<<<<<<< HEAD
=======
=======
        return [];
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }
}
