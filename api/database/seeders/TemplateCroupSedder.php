<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\TemplateGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateCroupSedder extends Seeder
{

    public function run()
    {
        $data = [];
        for ($i = 1; $i < 3; $i ++){
            $data[] = [
                'name' => $i == 2 ? 'Վաճառք': 'Վարձակալություն',
                'category_id' => Category::all()->random()->id
            ];
        }

        TemplateGroup::insert($data) ;
    }
}
