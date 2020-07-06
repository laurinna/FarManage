<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('typeID')->unsigned();
            $table->foreign('typeID')->references('id')->on('animal_types');
            $table->bigInteger('breedID')->unsigned();
            $table->foreign('breedID')->references('id')->on('animal_breeds');
            $table->bigInteger('farmerID')->unsigned();
            $table->foreign('farmerID')->references('id')->on('farmers');
            $table->date('dateOfBirth');
            $table->string('comments');
            $table->bigInteger('createdBy')->unsigned();
            $table->foreign('createdBy')->references('id')->on('farmers');
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
        Schema::dropIfExists('animals');
    }
}
