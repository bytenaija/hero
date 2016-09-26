<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function organisations(){
       return $this->hasMany("Organisation");
   }
   
    public function beneficiaries(){
       return $this->hasManyThrough("Beneficiary", "Organisation");
   }
   
   public function user(){
       return $this->hasManyThrough(
               "User", "Profile",
                "user_id", "org_id",
               "id"
               );
   }
}

