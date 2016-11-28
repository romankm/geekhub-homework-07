<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Class DefaultController
 */
class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function noParameterAction()
    {
        $url = $this->generateUrl('with_prefix', [], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render('BlogBundle:Default:no-parameter-action.html.twig', [
            'url' => $url,
        ]);
    }

    /**
     * @param int $parameter
     * @return Response
     */
    public function oneParameterAction($parameter)
    {
        return $this->render('BlogBundle:Default:one-parameter-action.html.twig');
    }

    /**
     * @param int $one
     * @param string $two
     * @param string $three
     * @return Response
     */
    public function fewParametersAction($one, $two, $three)
    {
        $response = new Response(
            'Route with few parameters',
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );

        return $response;
    }

    /**
     * @return Response
     */
    public function forwardAction()
    {
        $response = $this->forward('BlogBundle:Blog:forwardDestination');

        return $response;
    }
}
