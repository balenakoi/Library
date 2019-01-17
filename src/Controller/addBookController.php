<?php
namespace App\Controller;

use App\Form\AddBookType;
use App\Entity\Books;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class addBookController extends Controller
{

    /**
     * @Route("/add", name="app_add_index")
     */
    public function add(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //  build the form
        $user = new Books();
        $form = $this->createForm(AddBookType::class, $user);
        //  handle the submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($user);
            // $entityManager->flush();
            //  set a "flash" success message for the user
            $this->addFlash('success', 'Votre livre a bien été ajouté.');
            return $this->redirectToRoute('app_page_index');
        }
        return $this->render('add/index.html.twig', ['form' => $form->createView(), 'mainNavAjouter' => true, 'title' => 'Ajouter']);
    }

}