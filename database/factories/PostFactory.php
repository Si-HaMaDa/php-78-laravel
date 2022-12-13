<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = rand() . '.jpg';
        $avatar = \Storage::disk('public')->put('posts/' . $imageName, file_get_contents('https://placekitten.com/350/350') ?? file_get_contents('https://loremflickr.com/500/500'));

        return [
            'title' => fake()->word(),
            'content' => fake()->paragraph(),
            'user_id' => rand(1, 10),
            'cat_id' => rand(1, 10),
            'image' => $imageName
        ];
    }
}
