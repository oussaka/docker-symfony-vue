<?php

namespace App\Controller\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;


/**
 * Class ApiController
 * @package AppBundle\Controller
 */
class ApiController extends FOSRestController
{
    /**
     * @Rest\Get("hello/{astronaut}", defaults={"astronaut" = null})
     *
     * @param string $astronaut
     *
     * @return string
     */
    public function getHello(string $astronaut = null): View
    {
        return View::create("Hello ".$astronaut ?? "Astronaut", Response::HTTP_OK);
    }
}