<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomsBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomsBooking',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('roomId');
          $table -> string('customerId');
          $table -> string('dateFrom');
          $table -> string('dateTo');
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
        Schema::dropIfExists('roomsBooking');
    }
}
