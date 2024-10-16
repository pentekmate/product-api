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
        $imgs=[
            'https://plus.unsplash.com/premium_photo-1664195539660-dff084743dbd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dG9vbHxlbnwwfHwwfHx8MA%3D%3D',
           'https://images.unsplash.com/photo-1453806839674-d1a9087ca1ed?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dG9vbHxlbnwwfHwwfHx8MA%3D%3D',
           'https://images.unsplash.com/photo-1503789146722-cf137a3c0fea?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dG9vbHxlbnwwfHwwfHx8MA%3D%3D',
           'https://images.unsplash.com/photo-1650664370914-f026578ec2a4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dG9vbHxlbnwwfHwwfHx8MA%3D%3D',
           'https://images.unsplash.com/photo-1492540747731-d05a66dc2461?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1503792501406-2c40da09e1e2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1503791228404-a79884146f98?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1505728068082-c4e7a2a3a46d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1534398079543-7ae6d016b86a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://plus.unsplash.com/premium_photo-1678378943706-365f979d3b19?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1518709414768-a88981a4515d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1504148455328-c376907d081c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fHRvb2x8ZW58MHx8MHx8fDA%3D',
           'https://images.unsplash.com/photo-1530088528371-105e6f3b2336?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDd8fHRvb2x8ZW58MHx8MHx8fDA%3D'
        ];
        return [
            'name'=>fake()->word() . fake()->word() . fake()->randomNumber(3),
            'picture'=>collect($imgs)->random(),
            'price'=>rand(3000,100000)

        ];
    }
}
