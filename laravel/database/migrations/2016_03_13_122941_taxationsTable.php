<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaxationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxations',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('name');
          $table -> string('type');
          $table -> string('value');
          $table -> string('authority');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxations');
    }
}
