<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use App\AdminUser;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin() {
        return view('login.login');
    }

    public function postLogin(LoginRequest $request) {
        $type = Request::get('type');
        $user = '';
       // $use = '';
        if ($type == 'admin') {
            $user = new AdminUser;
           
        } else if ($type == 'client') {
            
        } else {
            
        }
        $login = $user::where('email', Request::get('email'));
        
     if($login->first() != null){
                
            
        if ($login->first()->password == Request::get('password')){
            
            return redirect(Request::get('type')."/");
        }else{
            
            return "Not logged in";
        }
            } else{
                
                return "Error, user name";
            }
    
            
//        return Request::get('type') . $use ;
    }

}
