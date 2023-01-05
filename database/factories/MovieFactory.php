<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'video_url' => fake()->unique()->url(),
            'cast' => 'Vandan, Pete Edochie, Omotala',
            'status' => true,
            'released_date' => '12/03/2005',
            'description' => fake()->paragraph(2),
            'image' => 'images/movie1.png',
            'pg' => 'PG-18',
        ];
    }
}
