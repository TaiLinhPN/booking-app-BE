<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $limit = 15;
        $fake = Faker::create();
        $array = [true, false];
        for ($i = 0; $i < $limit; $i++) {
            DB::table('feedback')->insert([
                'student_id' => rand(1,10),
                'teacher_id' => rand(1,10),
                'feedback' => $fake ->paragraph(1),
                'sender_type' =>  $array[rand(0,1)]                 
            ]);
        }
    }
}