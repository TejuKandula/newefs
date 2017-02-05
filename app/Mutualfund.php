<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'type',
        'name',
        'asset_value',
        'settle_date',

    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
