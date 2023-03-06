<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;

    public function run()
    {
        User::factory(10)->create();
        Role::insert([['role' => 'admin', 'user_id' => 1],['role' => 'user', 'user_id' => 2] ]);
        $this->call([
            RegionSeeder::class,
            CitySeeder::class,
            ProfileSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            TemplateCroupSedder::class,
            TemplateSedder::class,

        ]);


    }
}
