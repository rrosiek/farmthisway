<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'product',
        'amount',
        'member_fee_paid',
        'email',
        'phone',
        'name',
        'cc_brand',
        'cc_lastfour',
        'token',
    ];
}