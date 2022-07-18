<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
            //
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>'vui long dien ten cho dung',
            'name.required'=>'vui long khong de trong muc nay',
            'name.max'=>'ten qua dai, vui long nhap lai',
            'age.numeric'=>'vui long dien lai tuoi cua ban dung',
            'date.string'=>'vui long dien lai ngay thang',
            'phone.numeric'=>'vui long kiem tra lai so dien thoai',
            'web.string'=>'vui long nhap lai ki tu',
            'address.string'=>'vui long nhap lai dia chi'

        ];
    }
}