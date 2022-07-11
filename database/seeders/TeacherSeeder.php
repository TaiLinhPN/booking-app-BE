<?php
 
 
 
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TeacherSeeder extends Seeder
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
            DB::table('teachers')->insert([
               'google_id' => $fake->numberBetween($min = 1, $max = 10),
                'facebook_id' => $fake->numberBetween($min = 1, $max = 10),
                'name' => $fake ->name,
                'email' => $fake -> unique->email,
                'address' => $fake -> address,
                'job' => $fake -> sentence,
                'company' => $fake -> sentence,
                'biography' =>$fake -> sentence,
                'dob' => $fake -> date("Y-m-d H:i:s"),
                'gender' =>  $array[rand(0,2)],
                'phone' => '0338761185',
                'username' => $fake -> name,
                'password' => '12345678',
                'reset_password_token' => "1223456789",
                'token_expired_at' => $fake -> date("Y-m-d H:i:s"),
                'created_at' => $fake -> date("Y-m-d H:i:s"),
                'updated_at' => $fake -> date("Y-m-d H:i:s"),
                'deleted_at' => $fake -> date("Y-m-d H:i:s"),
                
            ]);
        }

    }
}