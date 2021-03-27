<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Front\Controller;
use App\Rema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RemaController extends Controller
{
    public function store(){
        Rema::create([
            'name' => 'malik',
            'college' => 'cs',
            'dep'=> 'ais',
            'level' => '3',
        ]);
//        Db::commit();
//        return 'insert data sucsessfully';
//
   }
}
