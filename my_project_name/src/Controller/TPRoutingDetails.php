<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TPRoutingDetails extends AbstractController
{
    /**
     * @Route("tprouting/{page}/details",
     *     name="home3",
     *     requirements={"page"="\d+"},
     *     defaults={"page"=1},
     *     )
     */
    public function details(int $page)
    {
        return new Response('<html><body>Home Page ! <br>Page = '.$page.'</body></html>');
    }
}