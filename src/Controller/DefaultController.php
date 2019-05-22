<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index()
    {
        return $this->render('default.html.twig', [
            'welcome' => 'Bienvenue sur mon blog',
        ]);
    }
}