<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TPRoutingPage extends AbstractController
{
    /**
     * @Route("tprouting1/{page}",
     * name="home2",
     * requirements={"page"="\d+"},
     * defaults={"page"=1}
     * )
     */
    public function homepage2(int $page)
    {
        return new Response('<html><body>Home Page !<br> Page : '.$page.'</body></html>');
    }

}