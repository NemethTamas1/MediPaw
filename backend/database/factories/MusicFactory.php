<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "format" => $this->faker->randomElement(["Bakelit", "CD", "Kazetta"]),
            "price" => $this->faker->numberBetween(5000,15000)
        ];
    }
}
