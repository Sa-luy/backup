<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Tên không được để trống!!!',
            'name.min' =>'Tối thiếu 8 kí tự'
        ];
    }
    protected function withValidator()
    {
        $this->merge([
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
