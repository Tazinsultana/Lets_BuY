<?php

namespace App\Http\Controllers;
use App\Http\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function signup()
    {
        return view('authenticate.signup');
    }
    public function signin()
    {
        return view('authenticate.signin');
    }
//     public function dashboard()
// {
//     return view('authenticate.dashboard');

// }
public function Main()
{
    return view('layout.Main');

}

public function register(Request $request)
{


    $user= \App\Models\User::create([
        'fname' => $request->fname,
       'lname' => $request->lname,
       'email' => $request->email,
       'password' => $request->password,
        'confirmed_password' => $request->confirmed_password,
        
    ]);

     if ($user) 
     {
        return redirect('signin')->with('Register succefully');
    }
    //     dd("User created successfully");
    // } else {
    //     dd("User created Failed");
    // }
}

public function login(Request $request)
{
    $login=$request->only('email','password');




if (Auth::attempt($login)){

    // dd("User created successfully");
      
    

    return redirect('Main')->with('login succefully');


}
// dd("Login Failed");
// return redirect('login')->with('error','Opps! You have entered invalid credentials');

}


public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
 }