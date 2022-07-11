<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class teacherFaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $array = ['Male','Female','Other'];
        return [
                'google_id' => $this-> faker->numberBetween($min = 1, $max = 10),
                'facebook_id' => $this-> faker->numberBetween($min = 1, $max = 10),
                'name' => $this-> faker ->name,
                'email' => $this-> faker -> unique->email,
                'address' => $this-> faker -> address,
                'biography' =>$this-> faker -> sentence,
                'dob' => $this-> faker -> now(),
                'gender' =>  $array[rand(0,2)],
                'phone' => '0338761185',
                'username' => $this-> faker -> name,
                'password' => '12345678',
                'reset_password_token' => "1223456789",
                'token_expired_at' => $this-> faker -> now(),
                'created_at' => $this-> faker -> now(),
                'updated_at' => $this-> faker -> now(),
                'deleted_at' => $this-> faker -> now(),
        ];
    }
}