<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission_Profile extends Model
{
   protected $table = "permission_profile";
    
    protected $fillable = [
        'profile_id', 'permission_id'
    ];
    
    
}
