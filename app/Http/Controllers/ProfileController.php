<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\Permission_Profile;
use App\Permission;
use Auth;
use App\User;
use App\Client;
use App\Organisation;
use App\Vendor;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = User::find(Auth::user()->id);
       //$ordid = $user->org_id;
        return view("profile.index")->with("user", $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $orgs = array();
        $permissions = Permission::where('user_type', Auth::user()->user_type)->get();
//         

        if (Auth::user()->user_type == 'client') {
            $orgs = Client::all();
        } else if (Auth::user()->user_type == 'organisation') {
            $orgs = Organisation::all();
        } else if (Auth::user()->user_type == 'vendor') {
            $orgs = Vendor::all();
        }

        return view("profile.add")->with('permissions', $permissions)->with('orgs', $orgs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request) {
        //return route("profile.index");
        $user_id = Auth::user()->id;
        $orgs_id = Request::get('org_id');
        $designation = Request::get('designation');
        $sex = Request::get('sex');
        $file = Request::file('photo');
        $random_name = str_random(8);
        $destinationPath = 'profiles/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name . '_' . $user_id . '_' .Auth::user()->firstname. '_' .Auth::user()->lastname .'.' . $extension;
        $uploadSuccess = Request::file('photo')->move($destinationPath, $filename);
        if ($uploadSuccess) {
            $profile = Profile::create(array(
                        "user_id" => $user_id,
                        "org_id" => $orgs_id,
                        "designation" => $designation,
                        "sex" => $sex,
                        "photo" => $filename
            ));


            $perm = $this->createPermissions($profile);
            if ($perm) {
                return view('profile.index');
            }//
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function createPermissions($profile) {
         $permission_entry = null;
        if (!empty($profile)) {
            $permissions = Request::get('permissions');
            $profile_id = $profile->id;
            foreach ($permissions as $permission) {
                $permission_entry = Permission_Profile::create(array(
                            'profile_id' => $profile_id,
                            'permission_id' => $permission
                ));
            }

            if (!empty($permission_entry)) {
                return true;
            }

            return false;
        }
    }

}
