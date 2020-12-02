<?php

namespace App\Http\Controllers;
use App\Usermodel;
use Illuminate\Http\Request;

class Usermodels extends Controller
{
    function index(){
     return Usermodel::all(); //when model and table name same 
    
    }
    
}
