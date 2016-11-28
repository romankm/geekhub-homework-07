<?php

namespace BlogBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BlogController
 */
class BlogController
{
    /**
     * @return JsonResponse
     */
    public function withPrefixAction()
    {
        return new JsonResponse(['JsonResponse' => 'JsonResponse']);
    }

    /**
     * @return JsonResponse
     */
    public function forwardDestinationAction()
    {
        return new JsonResponse(['forwardDestination' => 'forwardDestination']);
    }
}
