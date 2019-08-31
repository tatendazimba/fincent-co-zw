<?php


namespace App\Http\Controllers\Repositories;


use App\Agent;
use App\Http\Controllers\Interfaces\AgentInterface;

class AgentRepository implements AgentInterface
{
    protected $agent;

    public function __construct(Agent $agent)
    {
        $this->agent = $agent;

    }

    public function index()
    {
        return $this->agent->all();
    }

    public function grouped()
    {
        return $this->agent->all()->groupBy("city");
    }


}
