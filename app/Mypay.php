<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Mypay extends Model
{
    protected $fillable = [
        'user_id','transaction_id','currency_code','amount','payment_status','payment_date','expire_date',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}
