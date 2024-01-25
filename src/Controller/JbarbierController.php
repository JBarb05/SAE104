<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class JbarbierController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('jbarbier/index.html.twig', [
            'controller_name' => 'JbarbierController',
            
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('jbarbier/about.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function resume(): Response
    {
        return $this->render('jbarbier/resume.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }


    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('jbarbier/portfolio.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }

    #[Route('/portfolio/connecter', name: 'portfolioconnecter')]
    public function portfolioconnecter(): Response
    {
        return $this->render('jbarbier/portfolioconnecter.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }

    #[Route('/portfolio/programmer', name: 'portfolioprogrammer')]
    public function portfolioprogrammer(): Response
    {
        return $this->render('jbarbier/portfolioprogrammer.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }

    #[Route('/portfolio/administrer', name: 'portfolioadministrer')]
    public function portfolioadministrer(): Response
    {
        return $this->render('jbarbier/portfolioadministrer.html.twig', [
            'controller_name' => 'JbarbierController',
        ]);
    }

}
