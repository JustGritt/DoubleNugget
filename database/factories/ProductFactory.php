<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->name,
            'price' => $this->faker->randomNumber(252),
            'image' =>  $this->faker->imageUrl(350, 350),
            'gender_id' => $this->faker->randomNumber(12)
        ];
    }
}
