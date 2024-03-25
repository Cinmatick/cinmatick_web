<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => 'Things Fall apart',
            'category_id' => Category::factory(1)->create()[0]->id,
            'video_url' => 'www.youtube.com/watch/things-fall-apart',
            'cast' => 'Vandan, Pete Edochie, Omotala',
            'status' => true,
            'trending' => true,
            'released_date' => '12/12/2002',
            'description' => 'Award winning movie of the year. ',
            'image' => 'images/movie1.png',
            'pg' => 'PG-18',
            'rating' => 5
        ];
    }
}
