<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin', ['except'=>['logout']]); //second parameter tells the laravel not to use this middleware on the logout function
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request){

        //Validate the form data 
    	$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log user in
           if( Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
               //If successful, then redirect to their intended location
                return redirect()->intended(route('admin'));
           }

        //If unsuccessful, then redirect back to the login with form data
        return redirect()->back()->withInput($request->only('email','remember'));



    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        //$request->session()->invalidate(); //Keeping this would log out both admin and user if either one logs out
        return redirect('/');
    }
}
