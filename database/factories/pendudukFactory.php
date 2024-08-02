<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class pendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "perempuan" => fake()->randomFloat(50, 32, 58),
            "lakilaki" => fake()->randomFloat(50, 32, 58),
            "total" => fake()->randomFloat(235, 189, 259)
        ];
    }
}
