<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class CalibratedBy extends Model
{
    public $table = 'calibrated_bies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
