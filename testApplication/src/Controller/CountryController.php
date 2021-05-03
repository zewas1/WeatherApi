<?php


namespace App\Controller;

use App\Entity\Country;
use App\form\WeatherForm;
use App\form\FormHandler;
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

        if ($form->isSubmitted() && $form->isValid()){
            $city = $form ["city"]->getData();
            $api = $form ["api"]->getData();

            return $this ->redirectToRoute('apicall',['city'=>[$city], 'api'=>[$api]]);
        }


        return $this->render('task/new.html.twig', [
            'form'=>$form->createView(),
            ]);
    }
}