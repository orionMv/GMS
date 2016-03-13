<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FnbItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fnbItemsTables',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('itemCode');
          $table -> string('itemName');
          $table -> string('itemCategory');
          $table -> string('itemPrice');
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
        Schema::dropIfExists('fnbItemsTables');
    }
}
