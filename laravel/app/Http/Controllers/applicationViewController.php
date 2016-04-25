<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Api;

// data models
use App\clientProfile;

class applicationViewController extends Controller
{
    public function dashboard(){

      return view('app.pages.dashboard');

    }

    public function profile(){

        $clientId = Api::getClientId();
        
        $userProfile = clientProfile::where('clientId',$clientId)->firstOrFail();

      return view('app.pages.profile',compact('userProfile'));

    }
}
