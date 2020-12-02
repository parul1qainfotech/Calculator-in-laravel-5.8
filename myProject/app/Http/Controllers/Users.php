<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;

class Users extends Controller
{
 
    function list(){
        //return Session::get('logData');
         $userdata=User::paginate(2);
              
         return view('userlist',['data'=>$userdata]);

    }

    function create(){
        return view('create');
    }
    function loginsubmit( Request $req){
      return User :: select('*')
       ->where([
        ['email','=',$req->email],
        ['password',"=",$req->password]
       ]    
        )->get();

       // $req->session()->put('logData',"connected");
        //return redirect('/list');
        //print_r($req->input()); 

    }

    function createsubmit(Request $req){
       
        $data= new User();
        $data->name=$req->username;
        $data->email=$req->email;
        $data->password=$req->password;
        $result=$data->save();

        if($result){
            return redirect('/login');
        }
    }


    function delete(Request $req)
    {
        $del=new User();
        $delv=$del::find($req->delete);
        $del::delete($delv);

    }
   
}
