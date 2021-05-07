<?php


namespace App\Repository\Response;

use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer;

class Response
{

    private string $name;
    private Main $main;

    /**
     * @var Weather[]
     * @
     */
    private array $weather;

    /**
     * @return Weather[]
     */
    public function getWeather(): array
    {
        return $this->weather;
    }

    /**
     * @param Weather[] $weather
     */
    public function setWeather(array $weather): void
    {
        $this->weather = $weather;
    }

    /**
     * @return Main
     */
    public function getMain(): Main
    {
        return $this->main;
    }

    /**
     * @param Main $main
     */
    public function setMain(Main $main): void
    {
        $this->main = $main;
    }

    //private $temp;
    //private $description;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}