<?php

namespace App\Http\Controllers;

use Request;
use App\AdminUser;

use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
       // $this->middleware('auth', ['except'=>['index', 'create']]);
    }
    public function index()
    {
        $adminuser = new AdminUser;
      //  $admins =  $adminuser->all();
       
           return view('admin.index')->with('admins', $adminuser->all()); 
        
      
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.register_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $adminuser = new AdminUser;
        //$input =  Request::all();
        
        $adminuser->Firstname = Request::get('Firstname');
        $adminuser->Lastname = Request::get('Lastname');
        $adminuser->email = Request::get('email');
        $adminuser->phone_number = Request::get('phone_number');
        $adminuser->password = Request::get('password');
        $adminuser->save();
         
        
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $admin =  AdminUser::where('id', $id)->first();
       
        
        return view('admin.show_admin')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin =  AdminUser::where('id', $id)->first();
       
        
        return view('admin.edit_admin')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $admin =  AdminUser::where('id', $id)->first();
        //$input =  Request::all();
        
        $admin->Firstname = Request::get('Firstname');
        $admin->Lastname = Request::get('Lastname');
        $admin->email = Request::get('email');
        $admin->phone_number = Request::get('phone_number');
        $admin->password = Request::get('password');
        $admin->update();
        
         return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
