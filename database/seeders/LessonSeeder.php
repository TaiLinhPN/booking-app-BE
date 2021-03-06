<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class LessonSeeder extends Seeder
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
        $array =['active', 'cancelled', 'delayed'];
        for ($i = 0; $i < $limit; $i++) {
            DB::table('lessons')->insert([
                'teacher_id' => rand(1,10),
                'name' => $fake ->name,
                'image_link' => $fake->imageUrl($width = 640, $height = 480, 'cats', true, 'fake'),
                'title' => $fake->paragraph(1),
                'class_size'=> $fake->numberBetween(1,10),
                'online_link'=> $fake->url('https://laracasts.com/discuss/channels/laravel/how-to-give-faker-posts-real-relative-url-of-project'),
                'offline_address'=> $fake->sentence,
                'document'=> json_encode([
                    
                        'name' => "dfnkjfmdl,sdfmgf",
                        'songs' => "dkjgflsfdngf"
                   
                   
                ] ),
                'start_time' =>$fake-> date("Y-m-d H:i:s"),
                'end_time'=> $fake-> date("Y-m-d H:i:s"),
                'status'=> $array[rand(0,2)],
             
                
                
            ]);
        }
    }
}