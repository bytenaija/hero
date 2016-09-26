<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo("User");
    }
    
    public function userPermission(){
        return $this->belongsToMany("Permission")->withTimestamps();
    }
    
    public static function getOrganisationbyUserId(User $user){
       $profile = Profile::where('user_id', $user->getKey())->first();
       
       if($profile != null){
       return $profile->get("org_id");
       }else{
           return 0;
       }
    }
    
   
}
