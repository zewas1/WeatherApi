<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Validator\Mapping\ClassMetadata;


class Country
{
    /**
     * @Assert\NotBlank
     * @Assert\Type("string")
     */
    protected $country;

    /**
     * @Assert\NotBlank
     * @Assert\Type("string")
     */
    protected $api;

    protected $weather;
    protected $description;
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @param mixed $api
     */
    public function setApi($api): void
    {
        $this->api = $api;
    }

    /**
     * @return mixed
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * @param mixed $weather
     */
    public function setWeather($weather): void
    {
        $this->weather = $weather;
    }
}