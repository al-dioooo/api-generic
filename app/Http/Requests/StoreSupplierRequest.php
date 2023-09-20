<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'code' => 'required|unique:suppliers,code',

            'name' => 'required',

            'email' => 'nullable',

            'address' => 'nullable',

            'bill_address' => 'nullable',

            'npwp' => 'nullable',

            'phone' => 'nullable',
            'fax' => 'nullable',
            'mobile' => 'nullable',

            'note' => 'nullable',

            'contact_person' => 'nullable',
            'contact_number' => 'nullable',

            'created_by' => 'required|string|max:100'
        ];
    }
}
