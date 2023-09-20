<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
            'name' => 'required|string',

            'application_id' => 'required|exists:applications,id',

            'permission' => 'array|min:1',
            'permission.*' => 'exists:permissions,id',

            'created_by' => 'required|string|max:100'
        ];
    }
}
