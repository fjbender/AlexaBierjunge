<?php

namespace AppBundle\Controller;

use Alexa\Request\IntentRequest;
use Alexa\Response\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BierjungeController extends Controller
{
    /**
     * @Route("/bierjunge", name="bierjunge")
     */
    public function indexAction(Request $request)
    {
        // TODO put this somewhere sensible
        $applicationId = "amzn1.ask.skill.a2ee56c1-3de8-42fe-b877-50223992efb0";
        $rawRequest = $request->getContent();
        $alexaRequestFactory = new \Alexa\Request\RequestFactory();
        $alexaRequest = $alexaRequestFactory->fromRawData($rawRequest, [$applicationId]);
        if ($alexaRequest instanceof IntentRequest) {
            $response = new Response();
            $response->respond('Hängt!');
            return new JsonResponse($response->render());
        }
        return new \Symfony\Component\HttpFoundation\Response("Nee", 500);
    }
}
