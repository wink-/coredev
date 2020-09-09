<?php

namespace App\Http\Requests;

use App\CalType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'nullable',
            ],
            'proc_link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
