<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Quote extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'sft_quotes';

    public static $searchable = [
        'part_number',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_id',
        'customer_code',
        'contact_id',
        'part_number',
        'part_description',
        'specification',
        'material',
        'process_id',
        'method_code',
        'method',
        'quantity_minimum',
        'quantity_maximum',
        'price',
        'units',
        'minimum_lot_charge',
        'quantity_price_break',
        'price_break',
        'weight',
        'surface_area',
        'thickness_minimum',
        'thickness_maximum',
        'notes',
        'comments',
        'baking',
        'baking_time_pre',
        'baking_temp_pre',
        'baking_time_post',
        'baking_temp_post',
        'bake_notes',
        'blasting',
        'blast_notes',
        'masking',
        'mask_notes',
        'testing',
        'test_notes',
        'user_id',
        'value_min',
        'value_max',
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

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function process()
    {
        return $this->belongsTo(Process::class, 'process_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
