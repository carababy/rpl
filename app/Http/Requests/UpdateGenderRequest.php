<?php

namespace App\Http\Requests;

use App\Gender;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateGenderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('gender_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'gender' => [
                'string',
                'min:1',
                'max:10',
                'nullable',
            ],
        ];
    }
}
