<?php


namespace App\Services;


class DataHandler
{
    private $baseUrl;
    private $api;

    public function __construct ($baseUrl, $api){
        $this->baseUrl = $baseUrl;
        $this->api = $api;
    }

    public function get($api){

        if ($api === $this->$api)
        return "Get from API: " . $api;
    }
}