<?php

namespace App\Http\Controllers\Country;

use Illuminate\Http\Request;
use App\CountryModel;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
   public  function country(){
        return response()->json(CountryModel::get(),200);

    }

    public function countryByID($id){
        return CountryModel::find($id);
    }

    public function countrysave(Request $request){
        $country=CountryModel::create($request->all());
        return CountryModel::get($country);
             
    }
 public function Countryupdate(Request $request){
     $country->update($request->all());
     return CountryModel::get($country);
 }

 public function Countrydelete(Request $request , CountryModel $country){
      CountryModel::delete();
     return response()->json(null,204);
 }
   
}
