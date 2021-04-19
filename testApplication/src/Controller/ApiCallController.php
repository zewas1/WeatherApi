<?php


namespace App\Controller;

use GuzzleHttp\Client;
use App\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class ApiCallController extends AbstractController
{
    /*
     * @Route("/data", name="call_api", methods={"POST"})
     */
    public function post(
        Request $request
    )
    {

        $data = json_decode(
            $request->getContent(),
            true
        );

        exit(\Doctrine\Common\Util\Debug::dump($data));

        return new JsonResponse(
            [
                'status' => 'ok',
            ],
            JsonResponse::HTTP_CREATED
        );

    }
}