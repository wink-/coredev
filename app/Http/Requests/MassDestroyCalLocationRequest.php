<?php

namespace App\Http\Requests;

use App\CalLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCalLocationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_location_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cal_locations,id',
        ];
    }
}
