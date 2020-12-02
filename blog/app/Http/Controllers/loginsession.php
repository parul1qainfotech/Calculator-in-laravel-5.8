<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginsession extends Controller
{
    public function loginflash(Request $request){

        $value=$request->input('username');
        $data=$request->session()->flash('userkeys','DATA has been successfully saved');
        //print_r($request->session()->get('userkeys'));
        return redirect('welcome');
    }
}
