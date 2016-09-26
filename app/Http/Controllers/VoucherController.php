<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Voucher;

class VoucherController extends Controller
{
    public function getVoucher($voucherid){
?>
<script type="text/javascript">
    alert(<?php echo $voucherid ?> );
    </script>
<?php
//        return "$voucherid";
 $voucher = Voucher::find('voucher_number', $voucherid)->first();
 if(!empty($voucher)){
 $beneficiary = $voucher->beneficiary;
 if(!empty($beneficiary)){
   //   echo "I am laughing";
      return view('voucher.voucher_ajax')->with('beneficiary', $beneficiary)->with('voucher', $voucher);
   }
    }
    return view('voucher.voucher_ajax')->with('voucherid', $voucherid);//->withErrors($voucher, $beneficiary);//->with('voucher', $voucher);
}

public function add(){
    return view("voucher.add");
}
}


