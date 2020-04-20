<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
         'name', 'codigo','marca','machine_id','description','status'
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
