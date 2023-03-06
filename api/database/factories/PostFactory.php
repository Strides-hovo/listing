<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->title,
            'content' => $this->faker->randomHtml,
            'images' => $this->images(),
            'fields' => $this->faker->shuffleArray(['apartment', 'car','food']),
        ];

    }


    public function images(): array
    {
        $i = 0;
        $images = [];
        while ($i < 3){
            $images[] = $this->faker->imageUrl;
            $i++;
        }
        return $images;
    }
}
