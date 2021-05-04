<?php


namespace App\Services;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;



class DataHandler
{
    /**
     * @var ParameterBagInterface
     */
    private $params;


    public function __construct (ParameterBagInterface $params){
        $this->params=$params;
    }

    public function getApiValue(){
        $apiValue = $this->params->get('api');

        return $apiValue;
    }

    public function getUrlValue(){
        $urlValue = $this->params->get('base_url');

        return $urlValue;
    }
}