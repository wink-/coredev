<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Process extends Model
{
    use SoftDeletes;

    public $table = 'sft_processes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'minimum_lot_charge',
        'compliant_rohs',
        'compliant_reach',
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

    public function processQuotes()
    {
        return $this->hasMany(Quote::class, 'process_id', 'id');
    }
}
