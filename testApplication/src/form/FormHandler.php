<?php


namespace App\form;



class FormHandler
{
    function formHandling ($api , $country){
        $formHashMap = array();

        $this->api = $api;
        $this->country = $country;

        $formHashMap['api'] = 'country';
        return "ok";
    }
}