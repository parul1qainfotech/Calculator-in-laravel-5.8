<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//pagination
class Companies extends Controller
{
   function list(){
       echo "hello";
    //$data=DB::table('myusers')->paginate(3);
    //return view('Companies',['datas'=>$data]);

    $newdata=[
        'name'=>'parul',
        'email'=>'parul@gmail.com',
        'id'=>123,
        'head'=>'<h1>hii</h1>'
    ];
    return view('Companies',['newdata'=>$newdata]);
   } 
  
}
