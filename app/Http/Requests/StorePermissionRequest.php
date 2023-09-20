<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
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
            'application_id' => 'required|exists:applications,id',

            'page' => 'required|string',
            'action' => 'required|string',
            'node' => 'required|string',

            'name' => 'required|string',
            'description' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'application_id.exists' => 'Data not exists.'
        ];
    }
}
