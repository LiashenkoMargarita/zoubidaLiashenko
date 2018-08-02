<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "user" => [
                "Nom" => "Bob",
                "Prenom" => "Patric",
                "avatar" => "http://tout-sur-la-boxe.net/wp-content/uploads/bob%20l%5C'%C3%A9ponge.jpg",
                "image" => "assets/static/images/500.png",
            ]
        ]);
    }
}
