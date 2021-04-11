<?php

namespace App\Http\Controllers;

//use App\Http\Requests\RemaRequest;
//use LaravelLocalization;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Mcamara\LaravelLocalization\LaravelLocalization;

//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//use Mcamara\LaravelLocalization\LaravelLocalization;

//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//use Mcamara\LaravelLocalization\LaravelLocalization;

//use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    public function store(OfferRequest $request)
    {


        //validate data before insert to database
        Offer::create([
            'id'=>$request->id,
            'name_en'=>$request ->name_en,
            'name_ar'=>$request ->name_ar,
            'price'=>$request->price,
         ]);
        return redirect()->back()->with(['success'=>'تمت اضافه العرض بنجاح ']);

    }
    public function getAllOffer(){
       $offers= Offer::select
       ('id',
       'price',
       'name_' . (new \Mcamara\LaravelLocalization\LaravelLocalization)
       ->getCurrentLocale() . ' as name' )->get();
       return view('offers.all',compact('offers'));
    }
}

