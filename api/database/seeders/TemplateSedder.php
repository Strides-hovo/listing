<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Template;
use App\Models\TemplateGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSedder extends Seeder
{

    public function run()
    {
        $data = [];
        for ($i = 1; $i < 3; $i ++){
            $data[] = [
                'name' => $i == 2 ? 'Բնակարաններ': 'Տներ',
                'template_group_id' => TemplateGroup::all()->random()->id,
                'fid' => uniqid()
            ];
        }
        Template::insert($data) ;
    }
}
