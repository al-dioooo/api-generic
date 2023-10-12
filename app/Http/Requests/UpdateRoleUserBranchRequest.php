<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleUserBranchRequest extends FormRequest
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
            'id' => 'required|exists:role_user_branch,id',
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
            'branch_id' => 'required|exists:branches,id'
        ];
    }

    public function messages()
    {
        return [
            'id.exists' => 'Data not exists.',
            'user_id.exists' => 'Data not exists.',
            'role_id.exists' => 'Data not exists.',
            'branch_id.exists' => 'Data not exists.'
        ];
    }
}
