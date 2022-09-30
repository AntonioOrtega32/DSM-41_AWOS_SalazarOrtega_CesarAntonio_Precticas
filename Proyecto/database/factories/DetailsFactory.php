<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Detail::class;

    public function definition()
    {
        return [
            //
        'cantidad' => $this -> faker -> text(),
        'precio' => $this -> faker -> text(),
        'name' => $this -> faker -> name(),
        //llave 
        'product_id' => random_int(1,100),
        'pedido_id' => random_int(1,100),    
        ];
    }
}
