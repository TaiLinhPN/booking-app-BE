<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table-> Integer("google_id")->nullable();
            $table-> Integer("facebook_id")->nullable();
            $table-> string("name",100)->nullable();
            $table-> string("email",100)->nullable();
            $table-> string("address")->nullable();
            $table-> text("biography")->nullable();
            $table-> date("dob")->nullable();
            $table-> enum("gender",['Male', 'Female','Other'])->nullable();
            $table-> string("phone",20)->nullable();
            $table-> string("job")->nullable();
            $table-> string("username",100)->nullable();
            $table-> string("company")->nullable();
            $table-> string("password")->nullable();
            $table-> string("reset_password_token",20)->nullable();
            $table-> dateTime("token_expired_at")->nullable();
            $table->timestamps();
            $table-> dateTime("deleted_at")->nullable();               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}