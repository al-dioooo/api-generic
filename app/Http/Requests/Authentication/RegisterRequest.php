<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'application_id' => 'required',
            'country_id' => 'required',
            'phone' => 'required|numeric|digits_between:10,13|unique:users,phone',
            'name' => 'required|string',
            'password' => 'required|string|confirmed|min:8'
        ];
    }
}
