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
            //
            'producto' => $this -> faker -> name(),
            'capvolumetrica' => $this -> faker -> name(),
            'numempaques' => $this -> faker -> randomNumber(),
            'preciounitario' => $this -> faker -> randomNumber(),
            'category_id' => $this -> faker -> randomElement([1])
            
        ];
    }
}
