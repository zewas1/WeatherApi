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
            return $this->params->get('api');
        }

        public function getUrlValue(){
            return $this->params->get('base_url');
        }

}