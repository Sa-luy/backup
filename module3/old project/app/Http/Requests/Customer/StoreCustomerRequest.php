<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'firstname' =>'required|max:255',
            'lastname' =>'required|max:255',
            'email' =>'required|unique|max255',
            'address' =>'required|max:255',
            'status' =>'required|max:255',
        ];
    }
    public function messages()
  
    {
        return [
            'firstname.required'=>'TRường Không Đươc để trống',
            'lastname.required'=>'TRường Không Đươc để trống',
            'email.required'=>'TRường Không Đươc để trống',
            'address.required'=>'TRường Không Đươc để trống',
            'status.required'=>'TRường Không Đươc để trống',
        ];
    }
}