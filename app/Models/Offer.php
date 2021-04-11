<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable=['id','name_en', 'name_ar','price'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=false;

//    public  function get(array $array)
//    {
//        return $this -> all();
//    }
}
