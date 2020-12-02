<?php

namespace App\Http\Controllers;
use User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator ;

class loginapi extends Controller
{

/*function user()
{
    $users=new User();
    $user->email=$request->email;
    $user->password=$request->password;
    $user->save();
    return response()->json($users);
}*/


function login(Request $request)
{

$valid=Validate::make($request->all(),[

    'email'=>'required|unique:users|email',
    'password'=>'required|max:8'
]);

if(!Auth::attmept($valid)){
    return response(['messge',"invalid authentication email or password"]);
}

$authtoken=Auth::user()->createToken('authToken')->accessToken;
return response(['user'=>Auth::user(),'access_token'=>$accessToken]);

      
 }
  
}
