<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
           'product_name'=>'required|unique:tbl_product|max:255|min:10',
           'product_slug'=>'required',
           'product_price'=>'required',
           'product_image'=>'required',
           'product_desc'=>'required',
           'product_content'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'tên không được để trống',
            'name.unique'=>'tên không được để trống',
            'name.max'=>'không được quá 255 ký tự',
            'name.min'=>'không được dưới 10 ký tự',
            'product_price.required'=>'không được để trống',
            'product_image.required'=>'không được để trống',
            'product_desc.required'=>'không được để trống',
            'product_content.required'=>'không được để trống',
        ];
    }
}
