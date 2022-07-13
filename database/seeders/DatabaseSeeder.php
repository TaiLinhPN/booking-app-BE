<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Teacher::factory(10)->create();
         $this->call(StudentSeeder::class);
         $this->call(TeacherSeeder::class);
         $this->call(LessonSeeder::class);
         $this->call(registrationSeeder::class);
         $this->call(FeedbackSeeder::class);
       
    }
}