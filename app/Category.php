<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    // [3, 7, 12] devuelva la lista de los ids de los clientes asociados
    public function getCustomerIdsAttribute()
    {
        return $this->customers()->pluck('id');
    }
}
