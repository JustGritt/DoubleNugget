<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ReviewFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text(125),
            'product_id'=>$this->faker->numberBetween(1,10),
            'users_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
