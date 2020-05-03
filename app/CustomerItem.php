<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    protected $fillable = ['customer_id', 'item_id'];

    protected $table = 'customer_item';
}
