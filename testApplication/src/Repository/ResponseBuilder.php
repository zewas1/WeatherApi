<?php


namespace App\Repository;


use App\Repository\Response\Response;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ResponseBuilder
{

    private Response $responseParams;
    private Communicator $communicator;

    public function __construct(Response $responseParams, Communicator $communicator)
    {
        $this->responseParams = $responseParams;
        $this->communicator = $communicator;
    }

    public function getResponse($city)
    {
        $content = $this->communicator->postRequest($city);
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

        return $responseParams;
    }

    /**
     * @return Communicator
     */
    public function postRequest()
    {
        return $this->communicator;
    }
}