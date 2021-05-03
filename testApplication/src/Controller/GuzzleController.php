<?php


namespace App\Controller;


use App\Services\DataHandler;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\JsonResponse;

class GuzzleController
{

    public function new(DataHandler $dataHandler)
    {
        $client = new Client([
            'base_url'=> 'http://api.openweathermap.org'
        ]);

        #$client->post('/data/2.5/weather?q=London&appid=11cebf838c424532085db58ef1790b80&units=metric', [
        #    'debug'=>true
        #]);
        $city = "London";
        $api = "11cebf838c424532085db58ef1790b80";

        $callUrl = "/data/2.5/weather?q=" . $city . "&appid=" . $api . "&units=metric";

        $response = $client->post($callUrl);
        $json=$response->json();
        return new JsonResponse(array('response data'=>$json));
    }
}