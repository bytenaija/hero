<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;
class Permission extends Model
{
    public function Profile(){
        return $this->belongsToMany("Profile")->withTimestamps();
    }
}
