<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function transaction(){
        return $this->hasMany("Transaction");
    }
}
