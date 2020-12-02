<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Files extends Controller
{
  function index(Request $req){
      print_r($req->file('user_file')->store('uploads'));
  }
}
