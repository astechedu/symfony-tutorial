<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/post', name: 'app_post')]
class PostController extends AbstractController
{
    #[Route('/', name: 'app_post')]
    public function index(): Response
    {
        echo "Post Controller";
        exit;  
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
