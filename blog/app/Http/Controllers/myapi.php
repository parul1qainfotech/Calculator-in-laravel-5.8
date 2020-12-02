<?php

namespace App\Http\Controllers;
use App\myap;
use Illuminate\Http\Request;

class myapi extends Controller
{
   function my(){
       
     
      return myap::all();
   }
}
