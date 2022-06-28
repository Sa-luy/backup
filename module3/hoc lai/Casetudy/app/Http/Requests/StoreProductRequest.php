<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'amouth' => 'required',
            'expiry' => 'required',
            'manufacture_day' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'file' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'name.required' => ' :attribute không đượv để trống!!!!',
            'price.required' => ' :attribute  không được để trống',
            'amouth.required' => ':attribute  không được để trống',
            'expiry.required' => ':attribute không được để trống',
            'manufacture_day.required' => 'Ngày Sản Xuất  không được để trống',
            'description.required' => ':attribute hông được để trống',
            'category_id.required' => ':attribute không được để trống',
            'file.required' => ':attribute không được để trống',
            // 'file.image' =>'Chỉ ssuwr dụng tệp hình ảnh',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên Sản phẩm',
            'price' => 'Giá Sản phẩm',
            'amouth' => 'Số Lượng Sản phẩm',
            'expiry' => 'Hahn sử dụng Sản phẩm',
            'manufacture_day' => 'Ngày Sản Xuất Sản phẩm',
            'category_id' => 'Danh Mục Sản phẩm',
            'file' => 'Hình ảnh Sản phẩm',
        ];
    }
    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'Đã có lỗi xảy ra vui lòng kiểm tra lại!');
            }
        });
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'create_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
