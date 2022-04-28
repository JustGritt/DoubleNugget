<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->shuffleString,
            'price' => $this->faker->randomFloat(10),
            'taille'=> $this->faker->randomFloat(23),
            'image' =>  $this->faker->imageUrl(350, 350),
            'quantity' => $this->faker->randomNumber()
        ];
    }
}
