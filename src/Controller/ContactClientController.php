<?php

namespace App\Controller;


use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Form\ContactClientFormType;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContactRepository;

class ContactClientController extends AbstractController
{
    private $entityManager; 

    public function __construct(EntityManagerInterface $entityManager) // Ajoutez ce constructeur
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/contact/client', name: 'app_contact_client')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
    
        return $this->render('contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    #[Route('/contact/client/add', name: 'app_contact_client_add')]
    public function add(Request $request): Response
    {
        $user = $this->getUser(); 
    
        $contact = new Contact();
        $contact->setUsercontact($user); 
    
        $form = $this->createForm(ContactClientFormType::class, $contact);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($contact);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('app_contact_client');
        }
    
        return $this->render('contact_client/add.html.twig', ['form' => $form->createView()]);
    }
    
    

    #[Route('/contact/client/edit/{id}', name: 'app_contact_client_edit')]
    public function editContact(Request $request, $id): Response
    {
        $contact = $this->entityManager->getRepository(Contact::class)->find($id);

        if (!$contact) {
            throw $this->createNotFoundException('Contact non trouvé pour l\'ID '.$id);
        }

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/contact/client/delete/{id}', name: 'app_contact_client_delete')]
    public function deleteContact(Request $request, $id): Response
    {
        $contact = $this->entityManager->getRepository(Contact::class)->find($id);

        if (!$contact) {
            throw $this->createNotFoundException('Contact non trouvé pour l\'ID '.$id);
        }

        $this->entityManager->remove($contact);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_contact'); 
    }
}

