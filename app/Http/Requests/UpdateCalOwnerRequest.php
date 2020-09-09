<?php

namespace App\Http\Requests;

use App\CalOwner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCalOwnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_owner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
