<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
         public $timestamps=false;
    protected $table="_z_country";
   protected $fillable=[

    'iso',
    'name',
    'dbame',
    'iso3',
    'position',
    'numcode',
    'phonecode',
    'created',
    'register_by',
    'modified',
    'modified_by',
    'record_deleted',
   ];
}
