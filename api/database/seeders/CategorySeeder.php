<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private \Faker\Generator $faker;


    public function run()
    {
        Category::insert($this->getter());
    }


    private function getter()
    {
        $this->faker = \Faker\Factory::create('ru_RU');
        $data = [];
        for ($i = 1; $i <= 5; $i++){
            $data[] = [
                'id' => $i,
                'name' => $this->faker->name('men'),
                'parent_id' => $i > 1 ? ($i - 1) : 0,
            ];
        }
        return $data;
    }


}
