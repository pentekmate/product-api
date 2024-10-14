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
    public function definition(): array
    {
        return [
            'name'=>fake()->word() . fake()->word() . fake()->randomNumber(3),
            'picture'=>fake()->imageUrl(640,640,'tech'),
            'price'=>rand(3000,100000)

        ];
    }
}
