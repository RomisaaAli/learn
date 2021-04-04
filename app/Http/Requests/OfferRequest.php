<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
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
                'name.required'=>__('masseges.offer name required'),
                'name.max'=>__('masseges.offer name max'),
                'price.numeric'=>__('messages.offer price numeric'),
                "Offer Name"=>'اسم العرض',
                ];
        }
    public function rules()
    {
        return [
            'id'=>'required',
             'name'=>'required',
             'name'=>'max:100',
             'price'=>'required',
             'price'=>'numeric',
        ];
    }
}
