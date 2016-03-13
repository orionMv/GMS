<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schemma::create('expenses',function(Blueprint $table){

          $table-> increments();
          $table-> string('clientId');
          $table-> string('supplierName');
          $table-> string('billReference');
          $table-> string('billValue');
          $table-> string('billDetails');
          $table-> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:;dropIfExists('expenses');
    }
}
