<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\updateClientProfileRequest;
use App\Http\Controllers\Controller;
use App\clientProfile;

use Api;

class clientProfileController extends Controller
{
    public function updateClientProfile(){
        
        $clientProfile = Api::getClientProfile();
        
        return view('app.pages.profile.update',compact('clientProfile'));
        
    }
    
    public function update(updateClientProfileRequest $request){
        
        dd($request->all());
        
        
    }
}

