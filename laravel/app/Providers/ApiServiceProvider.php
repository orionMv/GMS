<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
class ApiServiceProvider extends ServiceProvider
{
       /**
     * Register the service provider.
     *
     * @return void
     */
    
    public function boot(){
        
        //
        
    }
    
    public function register()
    {
        App::bind('Api', function()
        {
            return new \App\ApiClass\Api;
        });
    }
}
