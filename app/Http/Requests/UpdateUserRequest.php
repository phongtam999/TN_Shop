<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
               'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                // 'image' => 'required',
                'gender' => 'required',
                'group_id' => 'required',
                'address' => 'required',
                'birthday' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống!',
            'email.required' => 'Không được để trống!',
            'password.required' => 'Không được để trống!',
            'address.required' => 'Không được để trống!',
            'phone.required' => 'Không được để trống!',
            // 'image.required' => 'Không được để trống!',
            'gender.required' => 'Không được để trống!',
            'birthday.required' => 'Không được để trống!',
            'group_id.required' => 'Không được để trống!',
        ];
}
}