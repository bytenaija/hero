<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function transaction(){
        return $this->hasMany("Transaction");
    }
    
    public static function findUser(User $user){
         $vendorid = Profile::getOrganisationByUserId($user);
        
         
        return $vendorid;
    }
}
