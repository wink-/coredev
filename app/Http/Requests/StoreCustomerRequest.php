<?php

namespace App\Http\Requests;

use App\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCustomerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('customer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'code'                => [
                'max:10',
                'required',
                'unique:customers',
            ],
            'name'                => [
                'max:228',
                'required',
            ],
            'physical_address'    => [
                'max:228',
            ],
            'address_extension'   => [
                'max:228',
            ],
            'city'                => [
                'max:228',
            ],
            'state'               => [
                'max:2',
            ],
            'zip'                 => [
                'max:10',
            ],
            'destination_code'    => [
                'max:10',
            ],
            'packing_list_copies' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_1'           => [
                'max:25',
            ],
            'company_phone'       => [
                'max:13',
            ],
            'extension_1'         => [
                'max:4',
            ],
            'phone_2'             => [
                'max:13',
            ],
            'extension_2'         => [
                'max:4',
            ],
            'fax'                 => [
                'max:13',
            ],
            'email'               => [
                'max:228',
            ],
            'tax'                 => [
                'max:228',
            ],
            'ship_to_addressid'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'revision'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'carrier_code'        => [
                'max:10',
            ],
        ];
    }
}
