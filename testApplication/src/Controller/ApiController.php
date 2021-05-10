<?php


namespace App\Controller;


use App\Repository\ResponseBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;


class ApiController
{
    /**
     * @param Request $request
     * @param ResponseBuilder $responseBuilder
     * @return JsonResponse
     */

    public function new(Request $request, ResponseBuilder $responseBuilder): JsonResponse
    {
        $serializer = new Serializer();
        $city = $request->query->get('city');
        $response = $responseBuilder->getResponse($city);
        $json = $serializer->serialize($response, 'json');

        return new JsonResponse(array('response_data' => $json));
    }
}