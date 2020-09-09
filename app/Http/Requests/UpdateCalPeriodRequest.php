<?php

namespace App\Http\Requests;

use App\CalPeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalPeriodRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_period_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
