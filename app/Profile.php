<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Organisation;
use App\Client;
use App\Vendor;
class Profile extends Model
{
    protected $fillable = [
        'user_id','photo','designation','sex','org_id'
    ];
    public function user(){
        return $this->belongsTo("User");
    }
    
    public function permission(){
        return $this->belongsToMany("App\Permission")->withTimestamps();
    }
    
    public function organisation(){
        $this->belongsTo("Organisation", "org_id");
    }
    
    public function client(){
        $this->belongsTo("Client", "org_id");
    }
    
    public function vendor(){
        $this->belongsTo("Vendor", "org_id");
    }
    
    
    
   
}
