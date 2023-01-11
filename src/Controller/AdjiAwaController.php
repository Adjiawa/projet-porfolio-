<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdjiAwaController extends AbstractController
{
    #[Route('/adji/awa', name: 'app_adji_awa')]
    public function index(): Response
    {
        return $this->render('adji_awa/index.html.twig', [
            'controller_name' => 'AdjiAwaController',
        ]);
    }
}
awa