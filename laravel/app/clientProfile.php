<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientProfile extends Model
{
    protected $table = "clientProfile";
    protected $fillable = [

      'companyName',
      'companyRegistrationNumber',
      'building',
      'floor',
      'road',
      'city',
      'state',
      'country',
      'postalCode',
      'phone',
      'fax',
      'email',
      'created_at',
      'updated_at'


    ];
}
