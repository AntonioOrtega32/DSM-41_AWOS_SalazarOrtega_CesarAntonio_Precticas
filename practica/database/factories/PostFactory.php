<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     *@var string
     */
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'tilte' => $this-> faker -> sentence,
            'slug' => $this->faker -> text(10),
            'descripcion' => $this ->faker -> text(80),
            'image' => $this-> faker -> imageUrl(1280,720),
            'metatag' => $this-> faker -> text(7),
            'autor' => $this -> faker -> sentence,
            'date' => $this -> faker -> dateTime(),
            //Llaves foraneas 
            'user_id' => random_int(1,100),
            'category_id' => random_int(1,100),
        ];
    }
}
