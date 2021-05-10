<?php


namespace App\Repository;

use GuzzleHttp\Client as HttpClient;


class Client
{

    private $url;
    private $api;

    public function __construct($url, $api)
    {
        $this->url = $url;
        $this->api = $api;
    }

    public function getUrlValue()
    {
        return $this->url;
    }

    public function apiValue()
    {
        return $this->api;
    }


    public function getClient()
    {
        $baseUrl = $this->getUrlValue();

        return new HttpClient([
            'base_url' => $baseUrl
        ]);
    }

    public function urlBuilder($city)
    {
        $api = $this->apiValue();
        return "/data/2.5/weather?q=" . $city . "&appid=" . $api . "&units=metric";
    }
}