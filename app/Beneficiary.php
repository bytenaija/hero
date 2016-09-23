<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
   public function organisations(){
       return $this->belongTo("Organisation");
   }
   
   public function vouchers(){
        return $this->hasMany("Voucher");
    }
    
    public function transaction(){
        return $this->hasMany("Transaction");
    }
}
