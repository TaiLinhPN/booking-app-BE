<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class registrationSeeder extends Seeder
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
            DB::table('registrations')->insert([
                'student_id' => rand(1,10),
                'teacher_id' => rand(1,10),
                'lesson_id' => rand(1,10), 
            ]);
        }
    }
}