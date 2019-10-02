<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ["_to", "_from", "from_amount", "to_amount", "rate", "rate_id", "purpose", "type", "status", "customer_id", "user"];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
