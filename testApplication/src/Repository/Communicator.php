<?php

namespace App\Repository;

class Communicator
{

    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function postRequest($city): string
    {
        $callClient = $this->client->getClient();
        $callUrl = $this->client->urlBuilder($city);
        $response = $callClient->post($callUrl);

        return $response->getBody()->getContents();
    }

}