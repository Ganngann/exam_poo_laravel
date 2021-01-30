<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3,true),
            'content' => $this->faker->paragraph(50),
            'image' => $this->faker->numberBetween($min = 1, $max = 4) . ".jpg",
            'categorie_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'created_at' => $this->faker->dateTimeBetween('-20 days', now()),
        ];
    }
}
