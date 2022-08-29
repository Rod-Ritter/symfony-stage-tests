<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
   
   
    public function about(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Contact',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request, EntityManagerInterface $entityManager)
    {
        $messages = new Messages();
        
        $messageFormulaire = $this->createForm(MessagesType::class, $messages);
        // dd($contactFormulaire);
        $messageFormulaire->handleRequest($request);

        // dd($contactFormulaire);

        if ($messageFormulaire->isSubmitted() && $messageFormulaire->isValid()) {
            $entityManager->persist($messages);
            $entityManager->flush();
            return new Response('Ayé enfin');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Contact',
            'frmContact' => $messageFormulaire->createView()
        ]);
    }
    #[Route('/message', name: 'message')]
    public function message(Request $request, EntityManagerInterface $entityManager){
    $resultat =$entityManager->getRepository(Messages::class)->findAll();
    var_dump($resultat);
    return $this->render('articles/index.html.twig', [
        'messages' => $resultat]);
    }
    
}

