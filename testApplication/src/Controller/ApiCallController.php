<?php


namespace App\Controller;

use GuzzleHttp\Client;
use App\Entity\Country;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ApiCallController
{
    protected $apiUri = "http://api.openweathermap.org/data/2.5/weather";
    private $serializer;

    public function callApi($country, $api)
    {
        $client = new Client ([
            'headers'=> ['content-type'=>'application/json'],
            'Accept'=>'application/json'
        ]);

        $result = $client->get($this->apiUri, [
            'query'=>
            [
                'country'=>$country,
                'appid'=>$api,
            ]

    ]);
        $data = $result->getBody();

        return $this->serializer->deserialize($result, Response::class,'json');
    }
}