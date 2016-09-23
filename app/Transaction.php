<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     public function vendor(){
        return $this->belongsTo("Vendor", "vendor_id");
    }
    
    public function beneficiary(){
        return $this->belongsTo("Beneficiary", "beneficiary_id");
    }
    
    public function voucher(){
        return $this->belongsTo("Voucher", "voucher_no");
    }
}
