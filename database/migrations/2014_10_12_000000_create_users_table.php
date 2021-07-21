<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $kolom) {
            $kolom->increments('id');
            $kolom->string('name');  
            $kolom->string('des');  
			$kolom->timestamps();
        });

        Schema::create('users', function (Blueprint $kolom) {
            $kolom->increments('id');
            $kolom->unsignedInteger('level_id')->nullable();
            $kolom->string('name');
            $kolom->string('email')->unique();
            $kolom->string('password');
            $kolom->rememberToken();
            $kolom->timestamps();
        });
      
        Schema::table('users', function (Blueprint $kolom) {
		  $kolom->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
