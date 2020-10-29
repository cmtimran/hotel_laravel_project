<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
