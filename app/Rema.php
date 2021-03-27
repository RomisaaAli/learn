<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rema extends Model
{
    protected $table =['rema'];
    protected $fillable =['name', 'college', 'dep','level'];
   // public $timestamps = false;

}
