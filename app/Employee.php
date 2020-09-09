<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Employee extends Model
{
    use Auditable;

    public $table = 'sft_employees';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'code',
        'email',
        'pin',
        'password',
        'production',
        'supervisor',
        'entering',
        'shipping',
        'quoting',
        'pricing',
        'billing',
        'administrator',
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
