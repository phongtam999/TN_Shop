<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreUserRequest extends FormRequest
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
                'gender' => 'required',
                'group_id' => 'required',
                'image' => 'required',
                'address' => 'required',
                'birthday' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Không được để trống!',
            'password.required' => 'Không được để trống!',
            'name.required' => 'Không được để trống!',
            'phone.required' => 'Không được để trống!',
            'gender.required' => 'Không được để trống!',
            'group_id.required' => 'Không được để trống!',
            'image.required' => 'Không được để trống!',
            'address.required' => 'Không được để trống!',
            'birthday.required' => 'Không được để trống!',
        ];
    }
    // protected function failedValidation(Validator $validator)
    // {
    //     $errors = (new ValidationException($validator))->errors();

    //     throw new HttpResponseException(
    //         response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
    //     );
    // }
}