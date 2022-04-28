<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'image' => $this->faker->image('public/faker',400,300, null, false),
            'taille' => $this->faker->randomFloat(2, 0, 100),
            'quantity' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
