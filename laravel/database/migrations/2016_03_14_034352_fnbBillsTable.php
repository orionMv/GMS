<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FnbBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fnbBills',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('name');
          $table -> string('type');
          $table -> string('customerId');
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
        Schema:;dropIfExists('fnbBills');
    }
}
