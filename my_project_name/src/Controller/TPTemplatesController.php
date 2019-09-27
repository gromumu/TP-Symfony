<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesController extends AbstractController
{
    /**
     * @Route("/tptemplates",
     * name="tptemplateshome",
     * )
     */
    public function index()
    {

        $announcementsHome = [
            ["id"=>1,
                "title"=>"annonce 1",
                "content"=>"content 1",
                "price"=>12,
                "created Date"=>new\DateTime()
            ],
            ["id"=>2,
                "title"=>"annonce 2",
                "content"=>"content 2",
                "price"=>13,
                "created Date"=>new\DateTime()
            ]
        ];



        return $this->render('tp_templates/index.html.twig', [
            'controller_name' => 'TPTemplatesController',
            'announcementsHome' => $announcementsHome,
        ]);
    }
}
