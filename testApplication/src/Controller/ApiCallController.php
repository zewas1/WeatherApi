<?php


namespace App\Controller;

use App\form\WeatherForm;
use App\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiCallController extends AbstractController
{
    /*
     * @Route("/data", name="call_api", methods={"POST"})
     */
    public function post(Request $request)
    {
        $country = new Country();
        $form = $this->createForm(WeatherForm::class, $country);




        return new Response('Ok', 201);

    }
}