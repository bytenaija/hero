<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_Permission extends Model
{
    protected $fillable = [
        id, profile_id, permission
    ];
    
    
}
