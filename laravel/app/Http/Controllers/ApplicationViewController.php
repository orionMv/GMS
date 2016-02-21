<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationViewController extends Controller
{
    public function dashboard(){
        
         return view('application.dashboard');
        
    }
}
