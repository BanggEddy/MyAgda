<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface; // Importez le service EntityManagerInterface
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContactRepository;

class ContactController extends AbstractController
{
    private $entityManager; 

    public function __construct(EntityManagerInterface $entityManager) // Ajoutez ce constructeur
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
    
        return $this->render('contact/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    #[Route('/contact/add', name: 'app_contact_add')]
    public function add(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($contact);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('app_contact');
        }
    
        return $this->render('contact/add.html.twig', ['form' => $form->createView()]);
    }
    

    #[Route('/contact/edit/{id}', name: 'app_contact_edit')]
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

    #[Route('/contact/delete/{id}', name: 'app_contact_delete')]
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
    #[Route('/contact/show/{id}', name: 'app_contact_show')]
    public function showContact($id): Response
    {
        $contact = $this->entityManager->getRepository(Contact::class)->find($id);

        if (!$contact) {
            throw $this->createNotFoundException('Contact non trouvé pour l\'ID '.$id);
        }

        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
        ]);
    }

}
