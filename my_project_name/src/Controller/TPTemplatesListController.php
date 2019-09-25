<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesListController extends AbstractController
{
    /**
     * @Route("/tptemplates/list",
     *     name="tptemplates_list"
     * )
     */
    public function index()
    {
        return $this->render('tp_templates_list/index.html.twig', [
            'controller_name' => 'TPTemplatesListController',
        ]);
    }
}
