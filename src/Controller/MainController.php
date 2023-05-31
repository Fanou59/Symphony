<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function test()
    {
        $prenom = 'Georges';
        $age = 47;
        return $this->render('main.html.twig', [
            'prenom' => $prenom,
            'age' => $age
        ]);
    }
}
