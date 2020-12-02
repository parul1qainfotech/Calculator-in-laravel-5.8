<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
class Operations extends Controller
{
function fetch()
{
   // $data=Operation::all(); // for all data
   //$data=Operation::take(3)->get();// for limiting
   $data=Operation::orderBy('username','asc')->get();// orderby
  
    return view('fetch',['data'=>$data]);
}
    


function insert(Request $req)
{
    $data=new Operation;
    $data->username=$req->user;
    $data->email=$req->email;
    $data->password=$req->password;
    $result=$data->save();
    if($result){
        return redirect ('/login');
    }
} 
}
