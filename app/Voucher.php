<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    public function beneficiary(){
        return $this->belongsTo("Beneficiary", "assigned_to");
    }
    
    public function transaction(){
        return $this->hasMany("Transaction");
    }
}
