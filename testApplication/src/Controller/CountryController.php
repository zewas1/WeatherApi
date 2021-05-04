<?php


namespace App\Controller;

use App\Entity\Country;
use App\form\WeatherForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\DataHandler;

class CountryController extends AbstractController
{
    public function new(Request $request): Response
    {
        //$data = array();
        $country = new Country();
        $form = $this->createForm(WeatherForm::class,$country);
        $form->handleRequest($request);
        $city = $form ["city"]->getData();
        //$api = $form ["api"]->getData();

        if ($form->isSubmitted() && $form->isValid()){
            return $this ->forward('App\Controller\GuzzleController::new',[
                'city'=>[$city]
            ]);
            //return $this ->redirectToRoute('apicall',['city'=>[$city], 'api'=>[$api]]);
        }

        return $this->render('task/new.html.twig', [
            'form'=>$form->createView()
            ]);
    }
}