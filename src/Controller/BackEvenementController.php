<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackEvenementController extends AbstractController
{
    /**
     * @Route("/back/evenement", name="back_evenement")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $evenement = new Evenement();
        $form= $this->createForm(EvenementType::class);
        return $this->render('back_evenement/index.html.twig', [
            "form"=>$form->createView()
        ]);
    }
}
