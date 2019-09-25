<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TPRoutingHomePage extends AbstractController
{
    /**
     * @Route("/tprouting",
     *     name="home")
     */
    public function homepage()
    {
        return new Response("<html><body>Home Page !</body></html>");
    }
}