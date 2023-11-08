<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Faker;

#[Route('/test', name: 'app_test')]
class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    
    #[Route('/faker', name: 'app_test_faker')]
    public function faker(): Response
    {
        $faker = Faker\Factory::create();

        $arr = [
            'name' => $faker->name,
            'email' => $faker->email,
            'address' => $faker->address,
            'city' => $faker->city,
            'state' => $faker->state,
            'phone number' => $faker->phoneNumber,
            'country' => $faker->country,
            'created_at' => $faker->datetime,
            'updated_at' => $faker->datetime,
        ];

        echo "<pre>";print_r($arr);
        echo "Faker";
        exit;  
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }


}
