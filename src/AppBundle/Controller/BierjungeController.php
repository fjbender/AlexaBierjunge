<?php

namespace AppBundle\Controller;

use Alexa\Request\IntentRequest;
use Alexa\Response\Response as AlexaResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Bierjunge;
use Symfony\Component\HttpFoundation\Response;

class BierjungeController extends Controller
{

    /**
     * @param Bierjunge $bierjunge
     * @param Request $request
     * @return Response
     * @Route("/bierjunge", name="bierjunge")
     */
    public function indexAction(Bierjunge $bierjunge, Request $request)
    {
        // TODO put this somewhere sensible
        $applicationId = "amzn1.ask.skill.a2ee56c1-3de8-42fe-b877-50223992efb0";
        $rawRequest = $request->getContent();
        $alexaRequestFactory = new \Alexa\Request\RequestFactory();
        $alexaRequest = $alexaRequestFactory->fromRawData($rawRequest, [$applicationId]);
        if ($alexaRequest instanceof IntentRequest) {
            $response = new AlexaResponse();
            $response->endSession(true);
            $response->respond($bierjunge->haengt());
            return new JsonResponse($response->render());
        }
        return new Response("Nee", 500);
    }

    /**
     * @param Bierjunge $bierjunge
     * @param Request $request
     * @return Response
     * @Route("/test", name="test")
     */
    public function testAction(Bierjunge $bierjunge, Request $request)
    {
        return new Response($bierjunge->haengt(), 200);
    }
}
