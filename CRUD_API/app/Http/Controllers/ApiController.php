<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use Validator;
class ApiController extends Controller
{
    // for create
    function create(Request $request){

        $valid=Validator::make($request->all(),[

         'fname'=>'string|required|min:2|max:10',
         'lname'=>'string|required|min:2|max:10',
         'email'=>'required|email|unique:students',
         'password'=>'required|max:8|min:2|'


        ]);

        if($valid->fails()){
            return response()->json(['error'=>$valid->errors()],401);
        }
        

      $students=new Student();

       $students->fname=$request->input('fname');
       $students->lname=$request->input('lname');
       $students->email=$request->input('email');
       $students->password=$request->input('password');
  
       $students->save();
      $user=Auth::user();
      $success['token'] =  $user->createToken('Token')->accessToken;
       return response(['user'=>$user,'success' => $success]);
        
    }

// for show 
function show(){

    $students=Student::all();
    return response()->json($students);

}

//for fetching the data by id 
function showbyid($id){
    $students=Student::find($id);
    return response()->json($students);

}

//for updating the data

function update(Request $request,$id)
{

    $student=Student::find($id);
    $student->fname=$request->input('fname');
    $student->lname=$request->input('lname');
    $student->email=$request->input('email');
    $student->password=$request->input('password');
    $student->save();

    return response()->json($student);

}

function delete($id,Request $request){
    $student=Student::find($id);
    $student->delete();
    return response()->json($student);
}
}
