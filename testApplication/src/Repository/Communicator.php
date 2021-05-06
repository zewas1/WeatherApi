<?php


namespace App\Repository;


use App\app\Exceptions\WeatherException;
use GuzzleHttp\Exception;



class Communicator extends Client
{
    public function postRequest($city)
    {
        //try {
        $client = new Client();
        $callClient = $client->getClient();
        $callUrl = $this->urlBuilder($city);
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
}