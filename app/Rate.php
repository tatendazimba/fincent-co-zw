<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = ["_from", "_to", "buy", "sell", "user"];
}
