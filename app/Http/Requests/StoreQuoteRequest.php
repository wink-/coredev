<?php

namespace App\Http\Requests;

use App\Quote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreQuoteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('quote_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'customer_id'          => [
                'required',
                'integer',
            ],
            'part_number'          => [
                'required',
            ],
            'process_id'           => [
                'required',
                'integer',
            ],
            'price'                => [
                'required',
            ],
            'minimum_lot_charge'   => [
                'required',
            ],
            'quantity_price_break' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'revision'             => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
