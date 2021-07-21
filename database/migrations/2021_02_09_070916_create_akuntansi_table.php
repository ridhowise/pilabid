<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkuntansiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('aplikasi')){

        Schema::create('akuntansi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('tanggal');
            $table->integer('debit')->nullable();
            $table->integer('credit')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('source')->nullable();
            $table->string('pic')->nullable();
            $table->timestamps();

        });
    }
       
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akuntansi');
    }
}
