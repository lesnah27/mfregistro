<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contract extends Model
{
    protected $fillable = ['customer_id', 'description'];

    public function details()
    {
        return $this->hasMany(ContractDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function getItemsCountByStatus()
    {
        $detailIds = $this->details()->pluck('item_id');

        $counts = Item::whereIn('id', $detailIds)
            ->groupBy('status')
            ->select('status', DB::raw('COUNT(1) as count'))
            ->get()
            ->mapWithKeys(function ($item) {
                return [
                    $item['status'] => $item['count']
                ];
            });

        if (!isset($counts[0]))
            $counts[0] = 0;
        if (!isset($counts[1]))
            $counts[1] = 0;
        if (!isset($counts[2]))
            $counts[2] = 0;

        return $counts;
    }
}
