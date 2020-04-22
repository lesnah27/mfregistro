<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function getLastContractAttribute()
    {
        return $this->contracts()->orderBy('created_at')->first();
    }
}
