<?php


namespace App\Http\Controllers\Repositories;


use App\Http\Controllers\Interfaces\AgentInterface;
use App\Http\Controllers\Interfaces\CustomerInterface;

class AgentApiRepository implements AgentInterface
{
    protected $agents;

    public function __construct(CustomerInterface $agents)
    {
        $this->agents = $agents;
    }

    public function index()
    {
        $response = $this->agents->getAgents();

        if ($response->code === "00") {
            return $response->agents;
        } else {
            return [];
        }
    }

    public function grouped()
    {
        // TODO: Implement grouped() method.
    }
}
