<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientProfile',function(Blueprint $table){

          $table -> increments('id');
          $table -> string('clientId');
          $table -> string('building');
          $table -> string('floor');
          $table -> string('road');
          $table -> string('city');
          $table -> string('state');
          $table -> string('country');
          $table -> string('postalCode');
          $table -> string('phone');
          $table -> string('fax');
          $table -> string('email');
          $table -> string('companyName');
          $table -> string('companyRegistrationNumber');
          $table -> string('logo');
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
        Schema::dropIfExists('clientProfile');
    }
}
