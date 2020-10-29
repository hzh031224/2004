<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandPost extends FormRequest
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
            //
            'name' => 'required|unique:brand|max:20',
            'url' => 'required',
        ];
    }
    public function messages(){
         return [
                'name.required'=>'商品名称必填',
                'name.unique'=>'商品不能重复',
                'name.max'=>'网品名称为20位',
                'url.required'=>'网址必填',
            ];
         }

}
