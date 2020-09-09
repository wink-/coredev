<?php

namespace App\Http\Requests;

use App\CalStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
