<?php


namespace App\Http\Controllers\Repositories;


use App\Http\Controllers\Interfaces\CustomerInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CustomerRepository implements CustomerInterface
{

    protected $client;
    protected $url;
    protected $timeout;
    protected $agentsUrl;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->timeout = 10.0;
        $this->url = "http://dev.poscloud.pay263.co.zw:8104/api/";
        $this->agentsUrl = "http://dev.poscloud.pay263.co.zw:8101/api/";
    }

    public function getAgents()
    {
        $client = new Client([
            'base_uri' => $this->agentsUrl,
            'timeout'  => 30.0,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("GET", "agent");
        } catch (GuzzleException $e) {
            // TODO clean this up
            $r = array(
                "code" => "92",
                "description" => $e->getMessage()
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function register($mobile)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout, // TODO refactor timeout
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/register", [
                "json" => ["mobile" => $mobile]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function login($mobile, $password)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/login", [
                "json" => [
                    "mobile" => $mobile,
                    "pincode" => $password
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function cards($mobile)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/cards", [
                "json" => [
                    "mobile" => $mobile
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function transactions($mobile, $range)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/transactions", [
                "json" => [
                    "mobile" => $mobile,
                    "range" => $range,
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function blockCard($mobile, $cardId)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/card/block", [
                "json" => [
                    "mobile" => $mobile,
                    "cardId" => $cardId,
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function setPin($mobile, $pin)
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/initialize", [
                "json" => [
                    "mobile" => $mobile,
                    "pincode" => $pin,
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function kyc($mobile, $firstname, $lastname, $idNumber, $dob, $email = "")
    {
        $client = new Client([
            'base_uri' => $this->url,
            'timeout'  => $this->timeout,
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->request("POST", "client/kyc", [
                "json" => [
                    "mobile" => $mobile,
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "idNumber" => $idNumber,
                    "dob" => $dob,
                    "email" => $email,
                ]
            ]);
        } catch (GuzzleException $e) {
            $r = array(
                "code" => "92",
                "description" => "Error in connecting. Please try again."
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }

    public function getAgentTransactions($agentId, $dateRange)
    {
        $client = new Client([
            'base_uri' => $this->agentsUrl,
            'json'  => [
                "agent_id" => $agentId,
                "range" => $dateRange
            ],
            "auth" => [
                "SYSTEM",
                '$2a$12$YRoH.U7U69gQwI4wUBLI2elYv0XopyZW9L9hz5OHp5/YibNhkPQjy',
            ]
        ]);

        try {
            $response = $client->post("transaction/agent/range");
        } catch (GuzzleException $e) {
            // TODO clean this up
            $r = array(
                "code" => "92",
                "description" => $e->getMessage()
            );

            return (object) $r;
        }

        return json_decode($response->getBody());
    }
}
