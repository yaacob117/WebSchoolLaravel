<?php

namespace Database\Factories;

use App\Models\Superhero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superhero>
 */
class SuperheroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'real_name' => fake()->userName(),
            'universe_id' => fake()->numberBetween(1, 2),
            'gender_id' => fake()->numberBetween(1, 3),
            'picture' => fake()->imageUrl(640, 480, 'superheroes'),
        ];
    }
}