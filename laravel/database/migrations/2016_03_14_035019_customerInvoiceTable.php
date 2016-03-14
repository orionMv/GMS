<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerInvoice',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('customerId');
          $table -> longText('hotelBills');
          $table -> longText('fnbBills');
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
        Schema::dopIfExists('customerInvoice');
    }
}
