<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'product_name' => 'required',
            'price' => 'required|regex:/^[0-9]+$/|min:6',
            'uses' => 'required|min:6',
            'category_id' => 'required',
            'manufacture_day' => 'required',
            'expiry' => 'required'
        ];
    }
    public function messages()
    {


        return [
            'product_name.required' => '!!!tên không được để trống',
            'price.required' => 'Nhâp Giá',
            'price.reget' => 'nhập số',
            'price.min' => 'tối thiểu 6 so',
            'uses.required' => '!!!Nhập hướng dẫn sử dụng',
            'uses.min' => '!!!Tối thiểu 6 kí tự',
            'uses.requiredmin' => '!!!Tối thiểu6 ki tự',
            'category_id.required' => '!!! cần nhập mã loại sản phẫm',
            'expiry.required' => '!!!Nhập Hạn Sử dụng',
            'manufacture_day.required' => '!!!Nhập Ngày Sản xuất'
        ];
    }
}
