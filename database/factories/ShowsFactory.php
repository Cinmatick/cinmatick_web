<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shows>
 */
class ShowsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'movie_id' => 1,
            'theatre_id' =>1,
            'status' => 1,
            'price' => 5000,
            'date' => '2022-11-23', // password
            'time' => '9:00:00',
            'available_seats' => 20,
        ];
    }
}
