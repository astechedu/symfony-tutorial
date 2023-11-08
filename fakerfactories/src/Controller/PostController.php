<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Post;
use Faker;



class PostController extends AbstractController
{
    #[Route('/', name: 'post_index')]
    public function index(): Response
    {

        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }


    #[Route('/faker', name: 'post_faker')]
    public function faker(EntityManagerInterface $entityManager): Response
    {
        $faker = Faker\Factory::create();
     //Insert 10 records
      for($i=0;$i<10;$i++){
        $post = new Post();
        $post->setTitle($faker->name);
        $post->setDescription($faker->country);

        $entityManager->persist($post);
        $entityManager->flush();
       }
        exit;

    }
}
