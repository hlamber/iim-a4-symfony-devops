<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    /**
     * @Route("/", name="website")
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();
        foreach ($posts as $post){

        }
        print_r($posts)
        
        return $this->render('website/index.html.twig', [
            'controller_name' => 'WebsiteController',
        ]);
    }
}
