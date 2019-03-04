<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\admin\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //
     public function showLoginForm()
     {
         return view('layouts.admin.login');
     }


     //Validate login form
     public function login(Request $request)
     {
         $this->validateLogin($request);

         if ($this->attemptLogin($request))
         {
             return $this->sendLoginResponse($request);
         }

        return $this->sendFailedLoginResponse($request);
     }

     // to allow only users whose status are 'active' to login only
     protected function credentials(Request $request)
     {
         //return $request->only($this->username(), 'password');
         $admin = admin::where('email',$request->email)->first();
         
         if($admin->status==0){
           return ['email'=>'inactive','password'=>'Your account has been dormant, pls contact Admin'];
         }
         else{
         return['email'=>$request->email,'password'=>$request->password,'status'=>1];
       }
     }

     // Auth middleware
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    // Auth gaurd
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
