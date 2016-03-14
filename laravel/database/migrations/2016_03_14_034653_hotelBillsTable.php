<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HotelBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelBills',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('customerId');
          $table -> longText('rooms');
          $table -> longText('services');
          $table -> longText('items');
          $table -> string('tax');
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
        Schema::dropIfExists('hotelBills');
    }
}
