<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $commande = new Commande();
        $commande->setDateCmd('date de la commande');
        $commande->setNumCmd('numéro de la commande');
        $commande->setTotalCmd('total commande');
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
               "commande"=>$commande
        ]);
    }
}
