<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;
class Permission extends Model{

protected $fillable = [
    'user_type', 'auth_level', 'permission_group', 'permission_name'
];

    public function Profile(){
        return $this->belongsToMany("App\Profile")->withTimestamps();
    }
    
    
}
