<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/test/{name}/{id}/{page}",
     *      name="home",
     *     requirements={"id"="\d+", "page"="\d+"},
     *     defaults={"page"=3}
     *     )
     */
    public function index (string $name, int $id, int $page)
    {
        //return new Response('Hello '.$name.' '.$id.' '.$page.' !');
        return $this->redirectToRoute("home2", ['page'=>$page]);

    }

    /**
     * @Route ("/test/{page}", name="home2")
     */
    public function index2(int $page)
    {
        return new Response("<html><body>Hello 2</body></html>");
    }

}