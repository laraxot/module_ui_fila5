<?php

declare(strict_types=1);

namespace Modules\UI\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Illuminate\Support\Str;
use Modules\UI\Models\Category;

/**
 * @extends Factory<Category>
 */
<<<<<<< HEAD
=======
=======
use Modules\UI\Models\Category;

>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Category::class;

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
        /** @var string $title */
        $title = fake()->sentence(2);

        return [
            'title' => $title,
            'slug' => Str::slug((string) $title).'-'.fake()->unique()->numerify('###'),
            'is_active' => 1,
            'sort_order' => 0,
        ];
<<<<<<< HEAD
=======
=======
        return [];
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }
}
