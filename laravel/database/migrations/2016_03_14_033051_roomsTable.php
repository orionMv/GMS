<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rooms',function(Blueprint $table){

        $table -> increments('id');
        $table -> string('clientId');
        $table -> string('name');
        $table -> string('roomNumber');
        $table -> string('description');
        $table -> string('image');
        $table -> float('rate');
        $table -> integer('quantity');
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
        Schema::dropIfExists('rooms');
    }
}
