<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesCreationController extends AbstractController
{
    /**
     * @Route("/tptemplates/creation",
     *     name="tptemplates_creation")
     */
    public function index()
    {
        return $this->render('tp_templates_creation/index.html.twig', [
            'controller_name' => 'TPTemplatesCreationController',
        ]);
    }
}
