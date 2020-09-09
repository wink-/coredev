<?php

namespace App\Http\Requests;

use App\Calemployee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalemployeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('calemployee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'iden'      => [
                'string',
                'nullable',
            ],
            'user_init' => [
                'string',
                'nullable',
            ],
            'name'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
