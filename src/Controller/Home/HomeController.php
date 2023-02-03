<?php
namespace App\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    /**
     * @Route("/home", name="home")
     */
    public function home(): Response{
    return $this->render('Home/home.html.twig');

    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response{
      return $this->redirectToRoute("home");

    }
}