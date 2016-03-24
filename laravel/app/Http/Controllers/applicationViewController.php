<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// data models
use App\clientProfile;

class applicationViewController extends Controller
{
    public function dashboard(){

      return view('app.pages.dashboard');

    }

    public function profile(){



      return view('app.pages.profile',['profle'=>$userProfile]);

    }
}
