<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use Illuminate\Routing\controller;

class FristController extends Controller
{
public  function _construct(){
    $this->middleware('auth');
}
    public function showAdminName0()
    {
        return 'Romisa Ali 0';
    }
    public function showAdminName1()
    {
//        $obj=new \stdClass();
//        $obj->name='romisa';
//        $obj->id=6;
//        $obj->gender='female';
        $data=['romisa','lmia'];
//        $data['name']='romisaali';
//        $data['id']=1234;
        return view('welcome',compact('data'));
    }

}
