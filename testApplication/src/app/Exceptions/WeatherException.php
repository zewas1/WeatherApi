<?php


namespace App\app\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class WeatherException
 * @package Weather\Exception
 */

class WeatherException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;
}