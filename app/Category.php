<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function getItemsByStatus()
    {
        // category -> customers -> contracts -> details -> items

    }
}
