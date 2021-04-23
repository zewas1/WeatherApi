<?php


namespace App\Controller;

use App\Entity\Country;
use App\form\WeatherForm;
use App\form\FormHandler;
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
            function __construct (){

            }
            function formHandler(){
                $formHandler = new FormHandler();
                $formHashMap = $formHandler->formHandling();
            }
        }

        return $this->render('task/new.html.twig', [
            'form'=>$form->createView(),
            ]);
    }
}