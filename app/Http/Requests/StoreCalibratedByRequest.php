<?php

namespace App\Http\Requests;

use App\CalibratedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalibratedByRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('calibrated_by_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
