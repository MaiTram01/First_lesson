<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    // false: mọi thông báo lỗi nó không hiển thị ra màn hình. True thì nó bắt lỗi khi gặp lỗi
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'vui long dien ten cho dung',
            'age.numeric' => 'vui long nhap tuoi cho dung',
            'date.string' => 'vui long dien lai ngay thang',
            'phone.numeric' => 'vui long kiem tra lai so dien thoai',
            'web.string' => 'vui long nhap kiem tra lai ki tu',
            'address.string' => 'vui long nhap lai dia chi'
        ];
    }
}
