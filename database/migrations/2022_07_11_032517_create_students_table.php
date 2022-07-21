<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table-> Integer("google_id")->nullable();
            $table-> Integer("facebook_id")->nullable();
            $table-> string("name",100)->nullable();
            $table-> string("email",100)->nullable();
            $table-> string("address")->nullable();
            $table-> text("biography")->nullable();
            $table-> date("dob")->nullable();
            $table-> enum("gender",['Male', 'Female','Other'])->nullable();
            $table-> string("phone",12)->nullable();
            $table-> string("username",100)->nullable();
            $table-> string("password",10)->nullable();
            $table-> string("reset_password_token")->nullable();
            $table-> dateTime("token_expired_at")->nullable();
            $table-> dateTime("deleted_at")->nullable();     
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}