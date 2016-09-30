<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'phone_number','user_type', 'email', 'password'
    ];
 public function profile(){
     return $this->hasOne("App\Profile");
 }
 
 public function log(){
     return $this->hasMany("Log");
 }
 
// public function organisation(){
//     $user_type = $this->user_type;
//     if($user_type == 'Organisation'){
//         return $this->belongsTo("Organisation", $this->profile()->org_id);
//     } else if($user_type == 'Vendor'){
//         return $this->belongsTo("Organisation", $this->profile()->org_id);
//     } else if($user_type == 'Client'){
//         return $this->belongsTo("Organisation", $this->profile()->org_id);
//     } else {
//         return $this->belongsTo("Administration");
//     }
     
// }
 
 

 /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
