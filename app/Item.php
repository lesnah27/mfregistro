<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
         'name', 'codigo','marca','machine_id',
         'description','status','serial','modelo'
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function getStatusTextAttribute()
    {
        return Status::text($this->status);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
