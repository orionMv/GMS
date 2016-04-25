<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hotelservices',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('name');
          $table -> string('description');
          $table -> string('image');
          $table -> float('rate');
          $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hotelservices');
    }
}
