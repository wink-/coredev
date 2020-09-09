<?php

namespace App\Http\Requests;

use App\Equipment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEquipmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('equipment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [];
    }
}
