<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
           $table->increments('idFeedback');
            $table->integer('idStudent')->unsigned();
            $table->integer('idTeacher')->unsigned();
            $table->string('feedbackStudent');
            $table->string('feedbackTeacher');
            $table->foreign('idStudent')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('idTeacher')->references('id')->on('teachers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}