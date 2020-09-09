<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class CalPeriod extends Model
{
    public $table = 'cal_periods';

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
