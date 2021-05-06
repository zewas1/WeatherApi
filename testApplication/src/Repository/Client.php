<?php


namespace App\Repository;

use GuzzleHttp\Client as HttpClient;


class Client
{
    private $url;
    private $api;

    public function __constructor ($url, $api){
        $this->url=$url;
        $this->api=$api;
    }

    /*
    public function getUrlValue(){
        return $this->url->get('base_url');
    }
    public function apiValue(){
        return $this->api->get('api');
    }
    */

    public function getClient()
    {
        //$baseUrl=$this->getUrlValue();

        return new HttpClient([
            'base_url'=>'http://api.openweathermap.org'
        ]);
    }

    public function urlBuilder($city){
        //var_dump($city);
        //$api = $this->apiValue();
        $api = "11cebf838c424532085db58ef1790b80";
        return "/data/2.5/weather?q=" . $city . "&appid=" . $api . "&units=metric";
    }
}