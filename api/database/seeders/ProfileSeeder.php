<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    use WithoutModelEvents;

    private \Faker\Generator $faker;

    public function run()
    {
       Profile::insert($this->getter()) ;
    }


    private function getter(){

        $this->faker = \Faker\Factory::create('ru_RU');
        return User::limit(10)->get()->map(function($user){

            return [
                'user_id' => $user->id,
                'city_id' => City::all()->random()->id,
                'avatar' => $this->faker->imageUrl,
                'phone_first' => $this->faker->phoneNumber,
                'phone_last' => $this->faker->phoneNumber,
                'viber' => $this->faker->phoneNumber,
                'telegram' => $this->faker->phoneNumber,
                'skype' => $this->faker->phoneNumber,
                'whatsapp' => $this->faker->phoneNumber,
                'many' => $this->faker->numberBetween(100, 3000),
                'message_received' => $this->faker->realText,
                'message_left' => $this->faker->realText,
            ];
        })->toArray();

    }
}
