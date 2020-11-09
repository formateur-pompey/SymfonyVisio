<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{

     /**
      * @Route("/recette/{id}", name="recette_show")
      */
     public function show(int $id, RecetteRepository $recetteRepository)
     {
          $recette = $recetteRepository->find($id);

          return $this->render('recette/show.html.twig', [
               'recette' => $recette,
               'menu' => 'recette'
          ]);
     }
}