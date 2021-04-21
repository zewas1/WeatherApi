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
        $body =$request->getContent();
        $data = json_decode(
            $body,
            true
        );

        $country = new Country();
        //$country->setCountry("asd");
        //$country->setApi(12345);
        $form = $this->createForm(WeatherForm::class, $country);

        $form->submit($data);

        //exit(\Doctrine\Common\Util\Debug::dump($data));


//        $em = $this->getDoctrine()->getManager();
//        $em->persist($country);
//        $em->flush();

        /*return new JsonResponse(
            [
                'status' => 'ok',
            ],
            JsonResponse::HTTP_CREATED
        );*/

        return new Response('Ok', 201);

    }
}