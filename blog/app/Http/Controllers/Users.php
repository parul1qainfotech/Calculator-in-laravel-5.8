<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
   public function userdb(Request $request){
    //$users=DB::select('select * from users');
    $users=DB::table('users')
  
   //->find()//only id 
  // ->count(); //get will not use
 /* ->insert([
      'username'=>'hdhdhdhd@gmail.com',
      'password'=>'ddddd'
     
  ]) ;*/

/*  ->where('username','parul1@qainfotech.com')
  ->update([
      'username'=>'hfhfhhf'
  ]);*/

  ->where('username','.com')
->delete();
  //->get();
print_r($users); 
   }
}
