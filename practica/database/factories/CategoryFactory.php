<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /** 
    *@var string
     *
     * */
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //EL codigo va aqui
            'name' => $this->faker->word('hola'),
            'image' => $this->faker->imageUrl(1280, 720),
            'descripcion' => $this->faker->text(50),

        ];
    }
}
