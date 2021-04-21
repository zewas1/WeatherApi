<?php

use GuzzleHttp\Client;

$client = new Client([
   'base_uri'=>'http://localhost',
]);

$response = $client->post('/data');

echo $response->getBody();
