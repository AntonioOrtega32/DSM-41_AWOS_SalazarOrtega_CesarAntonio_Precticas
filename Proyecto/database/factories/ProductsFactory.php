<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            //
        'name' => $this -> faker -> name(),
        'capacidad' => $this -> faker -> text(),
        'piezas' => $this -> faker -> text(),
        'imagen' => $this -> faker -> text(),
        //llave 
        'category_id' => random_int(1,100),

        ];
    }
}
