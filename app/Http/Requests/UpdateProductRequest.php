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
            'price' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn Không được để trống!',
            'quantity.required' => 'Bạn Không được để trống!',
            'price.required' => 'Bạn Không được để trống!',
            'amount.required' => 'Bạn Không được để trống!',
            'category_id.required' => 'Bạn Không được để trống!',
            'description.required' => 'Bạn Không được để trống!',
            'image.required' => 'Bạn Không được để trống!',
           
        ];
    }
}