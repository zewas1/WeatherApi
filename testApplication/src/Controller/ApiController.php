<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\Communicator;
use Symfony\Component\HttpFoundation\Request;


class ApiController
{
    /**
     * @param Request $request
     * @param Communicator $communicator
     * @return JsonResponse
     */

    public function new(Request $request, Communicator $communicator): JsonResponse
    {
        $city = $request->query->get('city');
        $response = $communicator->postRequest($city);
        $json = $response->json();

        return new JsonResponse(array('response data' => $json));
    }
}