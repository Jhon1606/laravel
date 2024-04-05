<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            // importar el str para que genere los campos aleatorios
            // 'name' => Str::random(25),
            // 'short_description' => Str::random(45),
            // 'description' => Str::random(150),
            // 'price' => random_int(1,125)

            'name' => fake()->name(),
            'short_description' =>  fake()->sentence(),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(1,125)
        ];
    }
}
