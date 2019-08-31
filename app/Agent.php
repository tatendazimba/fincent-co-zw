<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $connection;
    protected $table = "agent";

    public function __construct(array $attributes = [])
    {
        $this->connection  = env("DB_DEV_CONNECTION");
        parent::__construct($attributes);
    }
}
