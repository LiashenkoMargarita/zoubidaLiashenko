<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="default")
     */
    public function index():Response
    {
        $number = random_int(0, 100);
        return new Response(
            "<html><body>Lucky number: $number</body></html>" 
        );
    }
}
