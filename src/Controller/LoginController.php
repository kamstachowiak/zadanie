<?php

namespace App\Controller;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error=$authenticationUtils->getLastAuthenticationError();

        $lastUsername=$authenticationUtils->getLastUsername();
        
        // 3 razy próbowałem po kolei z make:auth i ---> nie działa <---
        //więc jest bez autoryzacji

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error'=>$error,
        ]);
    }
}
