<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



class ProfileFactory extends Factory
{

    /** @noinspection PhpMissingReturnTypeInspection */
    public function definition()
    {

        return [
            'user_id' => User::all()->random()->id,
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
    }







}




