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


        //validate data before insert to database in offerrequest
        //save photo in folder
        $file_extension = $request -> photo -> getClientOriginalExtension();
        $file_name=time().$file_extension;
        $path= 'images/offers';
        $request-> photo ->move($path,$file_name);
        return "ok";
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
       ->setLocale() . ' as name' )->get();
       return view('offers.all',compact('offers'));
    }
    public function editOffer($offer_id)
    {
         $offer=Offer::find($offer_id);
        if(!$offer)
        return redirect( ) -> back();
         $offer=Offer::select('id','name_en','name_ar','price') ->find($offer_id);
         return view('offers.edit',compact('offer'));
         return $offer_id;


    }
    public function updateOffer(OfferRequest $request ,$offer_id){
         $offer=Offer::find($offer_id);
        $offer->update($request -> all());
        return redirect() -> back()-> with(['success'=>'تم التحديث بنجاح']);
        if(!$offer)
        return redirect() -> back();
        //تعديل حقول معينه ف db
        // $offer->update([ name_en=>$request->name_en])
    }
}

