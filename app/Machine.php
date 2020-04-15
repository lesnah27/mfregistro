<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{

    protected $fillable = [
         'name', 'modelo','marca'
    ];



    public function items()

    {
        return $this->hasMany(Item::class);
    }
}
