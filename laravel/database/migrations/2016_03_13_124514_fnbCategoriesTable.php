<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FnbCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fnbCategoriesTable',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('categoryName');
          $table -> string('categoryDescription');
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
        Schema::dropIfExists('fnbCategoriesTable');
    }
}
