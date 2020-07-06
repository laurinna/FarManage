<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('countyID')->unsigned();
            $table->foreign('countyID')->references('id')->on('counties');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->bigInteger('telephoneNo')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('createdBy')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
