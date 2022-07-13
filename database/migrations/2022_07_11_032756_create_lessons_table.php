<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->string('name');
            $table->string('image_link');
            $table->text('content');
            $table->integer('class_size');
            $table->string('online_link');
            $table->string('offline_address');
            $table->json('document');
            $table->dateTime('start_time');
            $table->timestamps();
            $table->integer('duration');
           
            $table->enum('status',['active','cancelled','delayed']);
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}