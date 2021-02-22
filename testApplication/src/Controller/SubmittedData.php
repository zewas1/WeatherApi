<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubmittedData
{
    /**
     * @Route("/data")
     */
    public function test(): Response
    {
        return new Response(
            'test'
        );
    }
}