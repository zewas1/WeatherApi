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
        $form = $this->createForm(WeatherForm::class,$country);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $country = $form->getData();
//            $form = $this->createFormBuilder($country)
//                ->setAction($this->generateUrl('/data'))
//                ->setMethod('GET');
            return $this->redirectToRoute('/data');
        }

        return $this->render('task/new.html.twig', [
            'form'=>$form->createView(),
            ]);
    }
}