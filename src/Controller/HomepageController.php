<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller
{

    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', ['mainNavHome' => true, 'title' => 'Accueil']);
    }

    /**
     * @Route("/page", name="app_page_index")
     */
    public function page()
    {
        return $this->render('page/index.html.twig', ['mainNavHome' => true, 'title' => 'Accueil']);
    }

    /**
     *@Route("/details", name="app_details_show")
     */
    public function show()
    {
        return $this->render('details/show.html.twig', ['mainNavHome' => true, 'title' => 'Detail']);
    }

    /**
     *@Route("/user", name="app_user_detail")
     */
    public function user()
    {
        return $this->render('user/detail.html.twig', ['mainNavHome' => true, 'title' => 'Detail de utilisateur']);
    }


}