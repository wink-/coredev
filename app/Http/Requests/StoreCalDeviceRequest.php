<?php

namespace App\Http\Requests;

use App\CalDevice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalDeviceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cal_device_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'nullable',
            ],
            'description'   => [
                'string',
                'nullable',
            ],
            'serial_number' => [
                'string',
                'nullable',
            ],
            'init_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'time_stamp'    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
