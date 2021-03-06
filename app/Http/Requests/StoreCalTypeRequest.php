<?php

namespace App\Http\Requests;

use App\CalType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
