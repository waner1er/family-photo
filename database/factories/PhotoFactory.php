<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(), 
            'src' => 'https://picsum.photos/id/'. random_int(1, 95) .'/500', 
            'description' => fake()->sentence(),
            'isPublic'=> fake()->boolean(),
            'category_id' => random_int(1, 5)
        ];
    }
}
