<?php

namespace Database\Factories;

use App\Models\Clothing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clothing>
 */

class ClothingFactory extends Factory
{
    protected $model = Clothing::class;

    public function definition(): array
    {
        return [
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'sex' => $this->faker->randomElement(["XS", "S", "M", "L", "XL"]),
            'color' => $this->faker->safeColorName(),
            'price' => $this->faker->numberBetween(10000,20000),
            'image_url' => $this->faker->word() . '.jpg',

        ];
    }
}
