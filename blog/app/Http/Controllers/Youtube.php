<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
  /*   function index($site)
    {
        return view('mypage',['site'=>$site]);
    }
    */
    function index(Request $request){
       // print_r($request->input());
     //  echo $request->input('site');
     //return view('login');


     $request->validate([
             'username'=>'required|email',
             //'password'=>'required|min:5|max:10',]);
             'password'=>['required','min:5','max:10'],]);
        // $data=$request->input('username');

         //$request->session->put('userdata',$data);
         //print_r($request->session()->get('userdata'));
         $data=$request->input('username');
        $nnewdata= $request->session()->put('user',$data);
        print_r($request->session()->get('user'));
        if($nnewdata=='parul1@qainfotech.com'){
          return view('welcome');
        }
        else{
          return view('login');
        }
         
    }
}
