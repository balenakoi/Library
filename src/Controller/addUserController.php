<?php
namespace App\Controller;

use App\Form\AddUserType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class addUserController extends Controller
{

    /**
     * @Route("/addUser", name="app_addUser_index")
     */
    public function addUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //  build the form
        $user = new Users();
        $form = $this->createForm(AddUserType::class, $user);
        //  handle the submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($user);
            // $entityManager->flush();
            //  set a "flash" success message for the user
            $this->addFlash('success', 'L\'utilisateur a bien été ajouté.');
            return $this->redirectToRoute('app_member_index');
        }
        return $this->render('addUser/index.html.twig', ['form' => $form->createView(), 'mainNavAjouter' => true, 'title' => 'Ajouter utilisateur']);
    }

}