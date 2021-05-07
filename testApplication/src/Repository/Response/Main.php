<?php


namespace App\Repository\Response;

class Main
{
    private $temp;

    /**
     * @return mixed
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * @param mixed $temp
     */
    public function setTemp($temp): void
    {
        $this->temp = $temp;
    }

}