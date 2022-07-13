<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 15;
        $array = ['Male','Female','Other'];
        $fake = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('students')->insert([
                'google_id' => $fake->numberBetween($min = 1, $max = 10),
                'facebook_id' => $fake->numberBetween($min = 1, $max = 10),
                'name' => $fake ->name,
                'email' => $fake -> unique->email,
                'address' => $fake -> address,
                'biography' =>$fake -> sentence,
                'dob' => $fake -> date("Y-m-d H:i:s"),
                'gender' =>  $array[rand(0,2)],
                'phone' => '1232332',
                'username' => $fake -> name,
                'password' => '1232',
                'reset_password_token' => "sdf",
                'token_expired_at' => $fake -> date("Y-m-d H:i:s"),
               
                'deleted_at' => $fake -> date("Y-m-d H:i:s"),
                
                
            ]);
        }

    }
}