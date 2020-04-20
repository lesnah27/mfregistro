<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['customer_id', 'description'];

    public function details()
    {
        return $this->hasMany(ContractDetail::class);
    }
}
