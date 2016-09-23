<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public function Beneficiary(){
        return $this->hasMany("Beneficiary");
    }
}
