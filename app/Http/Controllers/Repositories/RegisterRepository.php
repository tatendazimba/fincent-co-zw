<?php
/**
 * Created by PhpStorm.
 * User: Petros
 * Date: 5/29/2019
 * Time: 2:27 PM
 */

namespace App\Http\Controllers\Repositories;


use App\Http\Controllers\Interfaces\RegisterInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RegisterRepository implements RegisterInterface
{
    protected $api;
    protected $url;

    public function __construct(Client $api)
    {
        $this->api = $api;
        //$this->url = "https://dev.poscloud.pay263.co.zw:8104/api/";
    }

    public function register()
    {
        try {

            $response = $this->api->request("GET", "licence");

            return json_decode($response->getBody());

        } catch (GuzzleException $e) {
            // TODO log here
            return $e->getMessage();
        }
    }

}
