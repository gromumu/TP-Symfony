<?php

namespace App\Controller;

use App\DTO\Task;
use App\Entity\Announcements;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TPTemplatesCreationController extends AbstractController
{
    /**
     * @Route("/tptemplates/creation",
     *     name="tptemplates_creation")
     */
    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $adTask = new Announcements($task);
            $entityManager->persist($adTask);
            $entityManager->flush();

            return $this->redirectToRoute('tptemplateshome');
        }


        return $this->render('tp_templates_creation/index.html.twig', [
            'controller_name' => 'TPTemplatesCreationController',
            'form'=> $form->createView(),
        ]);
    }
}
