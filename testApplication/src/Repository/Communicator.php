<?php

namespace App\Repository;


use App\app\Exceptions\WeatherException;
use GuzzleHttp\Exception;
use App\Repository\Client;


class Communicator
{

    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function postRequest($city)
    {
        //try {
        $callClient = $this->client->getClient();
        $callUrl = $this->client->urlBuilder($city);
        $response = $callClient->post($callUrl);
        //$content = $response->getBody()->getContents();
        /*
        if (!$response) {
            throw new WeatherException('no response');
        }
    } catch (Exception\RequestException $exception){
        $exception->getMessage();
    }
        */
        return $response;
    }

    /**
     * @return \App\Repository\Client
     */
    private function getClient()
    {
        return $this->client;
    }
}