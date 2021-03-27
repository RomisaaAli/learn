<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RemaRequest extends FormRequest
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
    public function rules()
    {
        return [

                'id'=>'required',
                'name'=>'required|max:100',
                'price'=>'required|numeric',

        ];
    }
    public function messages(){
        return[
            'id.required' => 'يجب ادخال ',
            'name.required' => 'صيغة البريدالالكتروني غير صحيحة',
            'price.required' => 'يجب ادخال كلمة المرور',
// 'price.required' => 'السعر مطلوب',
        ];
    }

}
