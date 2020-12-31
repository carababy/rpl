<?php

namespace App\Http\Requests;

use App\IncomeSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIncomeSourceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('income_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
            ],
            'fee_percent' => [
                'numeric',
            ],
        ];
    }
}
