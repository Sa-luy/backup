<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'fullname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required',
            'day_of_birth' => 'required',
            'GroupID' => 'required',
            'gender' => 'required',
            'cccd' => 'required',
        ];
    }
    function messages()
    {
        return [
            'fullname.required' => 'tên là bắt buộc',
            'phone.required' => 'Liên Lạc là bắt buộc',
            'phone.numeric' => 'định dạng số',
            // 'phone.min' => 'Tôi thiểu 10 chữ số',
            // 'phone.max' => 'Tối đa 10 chữ số',
            'email.required' => 'email là bắt buộc',
            'email.email' => 'đinh dạng email sai',
            'email.max' => 'toios đa 255',
            'email.unique' => ' email đã tồn tại',
            'address.required' => 'Địa chỉ là bắt buộc',
            'day_of_birth.required' => 'ngày sinh là bắt buộc',
            'GroupID.required' => 'mã nhóm là bắt buộc',
            'gender.required' => 'giới tính là bắt buộc',
            'cccd.required' => 'số căn cước là bắt buộc',


        ];
    }
}