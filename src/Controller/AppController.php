<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request): Response
    {
        return $this->render('@App/App/page1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
             'message'=>'hello Symfony Vue!',
        ]);
    }

    /**
     * @Route("/page2", name="page2")
     */
    public function page2(Request $request): Response
    {
        return $this->render('@App/App/page2.html.twig', [
        ]);
    }
}
