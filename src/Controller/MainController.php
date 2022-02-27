<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

#[Route('/main/index/{saison}', name: 'saison')]
    public function Descriptif_saison($saison): Response
    {
        return $this->render('main/index.html.twig', [
            'saison' => $saison,
            'hiver'     => 'hiver',
            'printemps' => 'printemps',
            'été'       => 'été',
            'automne'   => 'automne',
            

        ]);
    }
}
