<?php


namespace App\Controller;


use App\Repository\Client;
use App\Services\DataHandler;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\Communicator;
use Symfony\Component\HttpFoundation\Request;


class ApiController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */

    public function new(Request $request , Communicator $communicator)
    {
        $city = $request->query->get('city');

        #$client->post('/data/2.5/weather?q=London&appid=11cebf838c424532085db58ef1790b80&units=metric', [
        #    'debug'=>true
        #]);

        $response = $communicator->postRequest($city);
        $json=$response->json();
        return new JsonResponse(array('response data'=>$json));
    }
}