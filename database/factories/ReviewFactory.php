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
            'title' => $this->faker->text(20),
            'comment' => $this->faker->text(125),
            'product_id'=>$this->faker->numberBetween(80,260),
            'users_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
