<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use Auth;
use App\Profile;

class UserController extends Controller {

    public function editName(Request $request, $id) {
        return route("profile.edit.name", $id);
    }

    public function editPhoto(Request $request, $id) {
        $file = Request::file('photo');
        $random_name = str_random(8);
        $destinationPath = 'profiles/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name . '_' . Auth::user()->id . '_' .Auth::user()->firstname. '_' .Auth::user()->lastname .'.' . $extension;
        $uploadSuccess = Request::file('photo')->move($destinationPath, $filename);
        if ($uploadSuccess) {
        $profile = Profile::find($id);
        $update = $profile->update(array('photo' => $filename));
       
      
        return view("profile.index")->with("user", Auth::user());
        }
    }

}
