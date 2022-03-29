<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(FilmRepository $filmRepository): Response
    {
        //dd($filmRepository->random3());

        return $this->render('default/index.html.twig', [

            'random3'=>$filmRepository->random3(),

        ]);
    }
}
