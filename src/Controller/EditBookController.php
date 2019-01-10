<?php
namespace App\Controller;

use App\Form\AddType;
use App\Entity\Add;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditBookController extends Controller
{

    /**
     * @Route("/edit", name="app_edit_editBook")
     */
    public function add(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //  build the form
        $user = new Add();
        $form = $this->createForm(AddType::class, $user);
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
        return $this->render('edit/editBook.html.twig', ['form' => $form->createView(), 'mainNavAjouter' => true, 'title' => 'Edit']);
    }

}