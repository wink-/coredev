<?php

namespace App\Http\Requests;

use App\Carrier;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCarrierRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('carrier_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'code'     => [
                'required',
            ],
            'revision' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
