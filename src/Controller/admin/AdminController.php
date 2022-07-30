<?php

namespace App\Controller\admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{

    /**
     * @Route("/administration", name="app_admin")
     */
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findBy(["email"=>$this->getUser()->getUserIdentifier()]);

        return $this->render('admin/index.html.twig', [
            "user" => $user,
            'controller_name' => 'AdminController',
        ]);
    }
}
