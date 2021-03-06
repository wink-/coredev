<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Carrier extends Model
{
    public $table = 'sft_carriers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'physical_address',
        'address_extension',
        'payment_address',
        'city',
        'state',
        'zip',
        'email',
        'company_phone',
        'fax',
        'note',
        'archive',
        'revision',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
