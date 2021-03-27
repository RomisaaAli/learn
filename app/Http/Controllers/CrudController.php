<?php

namespace App\Http\Controllers;

//use App\Http\Requests\RemaRequest;
use App\Models\Offer;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
class CrudController extends Controller
{
//    public function getoffer()
//    {
//return  Offer::get();
//    }
//    public function store(){
//        Offer::create([
//            'id'=>10,
//            'name'=>'mohammed ali ahmed ',
//            'price'=>'50000$',
////           ' updated_at'=>2021-03-05,
////            'created_at'=>2021-03-02
//
//        ]);
//    }
public function create()
{
    return view('offers.create');
}
    public function store(Request $request)
    {


        //validate data before insert to database
        //

            $rules=$this->getRules();
            $messages=$this->getMessages();
        $validator= Validator::make($request->all(),$rules,$messages);
        if($validator ->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        Offer::create([
            'id'=>$request->id,
            'name'=>$request ->name,
            'price'=>$request->price,
        ]);
        return redirect()->back()->with(['success'=>'تمت اضافه العرض بنجاح ']);

    }
    protected function getMessages(){
        return
        $mesages=[
            'id.required' =>__('masseges.offer id required'),
            'name.required'=>__('masseges.offer name required'),
            'name.max'=>__('masseges.offer name max'),
            'price.numeric'=>'السعر يجب ان يكون رقما',
            ];
    }
    protected function getRules(){
        return
        $rules=
        [
            'id'=>'required',
            'name'=>'required |max:100',
            'price'=>'required |numeric',
        ];

    }
}

