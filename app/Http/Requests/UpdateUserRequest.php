<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
            ],
            'gender_id'   => [
                'required',
                'integer',
            ],
            'email'       => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'phone'       => [
                'string',
                'min:2',
                'max:20',
                'nullable',
            ],
            'cooperative' => [
                'string',
                'min:2',
                'max:255',
                'nullable',
            ],
            'address'     => [
                'string',
                'min:2',
                'max:255',
                'nullable',
            ],
            'city'        => [
                'string',
                'min:2',
                'max:255',
                'nullable',
            ],
            'state'       => [
                'string',
                'min:2',
                'max:255',
                'nullable',
            ],
            'roles.*'     => [
                'integer',
            ],
            'roles'       => [
                'required',
                'array',
            ],
        ];
    }
}
