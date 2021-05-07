<?php

namespace App\Repository;

use App\app\Exceptions\WeatherException;
use App\Repository\Response\Response;
use GuzzleHttp\Exception;
use App\Repository\Client;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Repository\Response\Main;
use App\Repository\Response\Weather;

class Communicator
{

    private Client $client;
    private Main $main;
    private Response $responseParams;
    private Weather $weather;

    public function __construct(Client $client, Response $responseParams, Weather $weather)
    {
        $this->client = $client;
        $this->responseParams = $responseParams;
        $this->weather = $weather;
    }

    public function postRequest($city)
    {
        //try {
        $callClient = $this->client->getClient();
        $callUrl = $this->client->urlBuilder($city);
        $response = $callClient->post($callUrl);
        $content = $response->getBody()->getContents();
        /*
        if (!$response) {
            throw new WeatherException('no response');
        }
    } catch (Exception\RequestException $exception){
        $exception->getMessage();
    }
        */
        //$responseParams = json_decode($response, true);
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer(
            null,
            null,
            null,
            new PhpDocExtractor()
        ),
            new ArrayDenormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $responseParams = $serializer->deserialize($content, Response::class, 'json');

        var_dump($responseParams);

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