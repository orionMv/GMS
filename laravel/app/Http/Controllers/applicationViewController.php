<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class applicationViewController extends Controller
{
    public function dashboard(){

      return view('app.pages.dashboard');

    }
}
