<?php

namespace App\ApiClass;

use App\clientProfile;



class Api {
    
    private static $clientId;
    
    
    public function __construct(){
        
        //        replace this line with sha1 ecnrypted client id stored in the session
        self::$clientId = 'jasdjasdkjasdk1j2e14o1fO$N$On1';
        
    }
    
    
    public function getClientId(){
                
        return self::$clientId;
                
    }
    
    public function getClientProfile(){
        
        $clientProfile = clientProfile::where('clientId',self::$clientId)->firstOrFail();
        
        if($clientProfile) {
            
            return $clientProfile;
            
        } else {
            
            abort(404);
            
        }
        
    }
}