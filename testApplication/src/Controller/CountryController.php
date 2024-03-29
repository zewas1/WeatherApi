<?php


namespace App\Controller;

use App\Entity\Country;
use App\form\WeatherForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends AbstractController
{
    public function new(Request $request): Response
    {
        $country = new Country();
        $form = $this->createForm(WeatherForm::class, $country);
        $form->handleRequest($request);
        $city = $form ["city"]->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->forward('App\Controller\ApiController::new', [
                'city' => [$city]
            ]);
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}