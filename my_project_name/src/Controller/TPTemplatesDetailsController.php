<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesDetailsController extends AbstractController
{
    /**
     * @Route("tptemplates/{id}/details",
     *     name="tptemplates_details",
     *     requirements={"id"="\d+"},
     *     )
     */
    public function index($id)
    {
        return $this->render('tp_templates_details/index.html.twig', [
            'controller_name' => 'TPTemplatesDetailsController',
            'id'=> $id,
        ]);
    }
}
