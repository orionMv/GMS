<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TestModel;

class ApplicationViewController extends Controller
{
    public function dashboard(){



        $sample = TestModel::all();

        $samples = json_decode($sample);

        foreach($samples as $sample){

          dd($sample->TestObj);

        }



    }
}
