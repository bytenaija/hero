<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\Profile_Permission;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("profile.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $permissions = Permission::where('user_type', Auth::user()->user_type);
        return view("profile.add")->with('permissions', $permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request) {
        $profile_id = '';
        if (Auth::check) {
            $user_id = Auth::user()->id;
            $org_id = Request::get('org_id');

            $designation = Request::get('designation');
            $sex = Request::get('sex');

            $file = Request::file('photo');
            $random_name = str_random(8);
            $destinationPath = '/profiles/';
            $extension = $file->getClientOriginalExtension();
            $filename = $random_name . '_' . $user_id . '.' . $extension;
            $uploadSuccess = Request::file('photo')
                    ->move($destinationPath, $filename);

            $profile = Profile::create(array(
                        "user_id" => $user_id,
                        "org_id" => $org_id,
                        "designation" => $designation,
                        "sex" => $sex,
                        "photo" => $filename
            ));

       $perm =   $this->createPermissions($profile);
       if($perm){
           $this->index();
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
        //
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

    
    public function createPermissions($profile){
        if (!empty($profile)) {
                $permissions = Request::get('permissions');
                $profile_id = $profile->id;
                foreach($permissions as $permission){
                $permission_entry = Profile_Permission::create(array(
                    'profile_id' => $profile_id,
                    'permission_id' => $permission
                ));
                }
                
                if(!empty($permission_entry)){
                    return true;
                }
                
                return false;
            }
    }
}
