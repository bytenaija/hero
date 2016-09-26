<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vendor;
use App\Http\Requests;

class VendorController extends Controller
{
    public function addUser(Request $request){
        return view("vendor.adduser")->with("vendorid", Vendor::findUser(Auth::user()));
    }
}
