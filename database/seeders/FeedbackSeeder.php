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
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('feedback')->insert([
                'idStudent' => rand(1,10),
                'idTeacher' => rand(1,10),
                'feedbackStudent' => $fake ->paragraph(1),
                'feedbackTeacher' => $fake->paragraph(1),
                'created_at'=>$fake-> date(now()),
                'updated_at'=> $fake-> date(now())
                
                
            ]);
        }
    }
}