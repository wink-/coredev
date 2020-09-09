<?php

namespace App\Http\Requests;

use App\Workorder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateWorkorderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('workorder_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'customer_code' => [
                'required',
            ],
            'part_id'       => [
                'required',
                'integer',
            ],
            'date_received' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_required' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'quantity'      => [
                'required',
            ],
            'priority'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
