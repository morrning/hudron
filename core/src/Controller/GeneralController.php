<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    #[Route('/', name: 'general_home')]
    public function general_home(): Response
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }
    #[Route('/faq', name: 'general_faq')]
    public function general_home2(): Response
    {
        
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }
}
