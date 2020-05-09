<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusChange extends Model
{
    protected $fillable = ['item_id', 'status'];


    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getStatusTextAttribute()
    {
        return Status::text($this->status);
    }
    //esta funcion biene del modelo Status.php
}
