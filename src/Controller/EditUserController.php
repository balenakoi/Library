<?php
namespace App\Controller;

use App\Form\EditUserType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditUserController extends Controller
{

    /**
     * @Route("/userEdit", name="app_editUser_editUser")
     */
    public function edit(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        //  build the form
        $user = new Users();
        $form = $this->createForm(EditUserType::class, $user);
        //  handle the submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            //  set a "flash" success message for the user
            $this->addFlash('success', 'l\'utilisateur a bien été modifié.');
            return $this->redirectToRoute('app_member_index');
        }
        return $this->render('editUser/editUser.html.twig', ['form' => $form->createView(), 'mainNavAjouter' => true, 'title' => 'Modifier l\'utilisateur']);
    }

}