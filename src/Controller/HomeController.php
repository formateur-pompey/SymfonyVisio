<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\Notification;
use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

     /**
      * @Route("/", name="home_index")
      */
     public function index(RecetteRepository $recetteRepository)
     {
          $recettes = $recetteRepository->findBy([], ['id' => 'DESC']);

          return $this->render('home/index.html.twig', [
               'recettes' => $recettes,
               'menu' => 'home'
          ]);
     }

     /**
      * @Route("/contact", name="home_contact")
      */
     public function contact(Request $request, Notification $notification)
     {
          $contact = new Contact();
          $form = $this->createForm(ContactType::class, $contact);
          $form->handleRequest($request);

          if($form->isSubmitted() && $form->isValid())
          {
               $notification->notifyContact($contact);
               $this->addFlash('success', 'Votre email a bien été envoyer');
               return $this->redirectToRoute('home_index', [], 301);
          }

          return $this->render('home/contact.html.twig', [
               'formContact' => $form->createView()
          ]);
     }
}