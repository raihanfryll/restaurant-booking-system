<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restable>
 */
class RestableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tableNumber' => fake()->randomNumber(1, 3) . '' . fake()->randomLetter(),
            'AddedBy' => fake()->randomNumber(1, 2)
        ];
    }
}
