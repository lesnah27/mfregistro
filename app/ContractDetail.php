<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractDetail extends Model
{
    protected $fillable = ['contract_id', 'item_id'];

    public function item()
    {
        return $this->belongsTo((Item::class));
    }
}
