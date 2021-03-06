<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $photo;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(){
            return
            $mesages=[
                'id.required' =>__('masseges.offer id required'),
                'name_en.required'=>__('masseges.offer name required'),
                'name_ar.required'=>__('masseges.offer name required'),
                'name.max'=>__('masseges.offer name max'),
                'price.numeric'=>__('masseges.offer price numeric'),
                'Add Your Offer'=>__('masseges.Add Your Offer'),
                'Add Your Id'=>__('masseges.Add Your Id'),
                'Add Your Offer Name_en'=>__('masseges.Add Your Offer Name_en'),
                'Add Your Offer Nam_ar'=>__('masseges.Add Your Offer Name_ar'),
                'Add Your Offer price'=>__('masseges.Add Your Offer price'),
                "Offer Name"=>__('masseges.Offer Name'),
                "Offer Price"=>__('masseges.Offer price'),
                'Save Offer'=>__('masseges.Save Offer'),


                ];
        }
    public function rules()
    {
        return [
            'id'=>'required',
             'name_en'=>'required|max:10',
             'name_ar'=>'required|max:10',
             'price'=>'required',
             'price'=>'numeric',
        ];
    }
}
