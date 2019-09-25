<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPRoutingAdd extends AbstractController
{
    /**
     * @Route("/tprouting/announcements/add",
     * methods={"GET", "POST"}
     * )
     */

    public function index()
    {
        return $this->render('annonce/add.html.twig');
    }
}