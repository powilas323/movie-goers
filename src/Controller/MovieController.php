<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/movie/{page}", name="movie_list")
     */
    public function movie_list(int $page = 1)
    {
        return $this->render('Movie/movie_list.html.twig');
    }

    /**
     * @Route("/movie/c/{slug}", name="movie_show")
     */
    public function movie_show(string $slug)
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    /**
     * @Route("/movie/wishlist", name="movie_wishlist")
     */
    public function movie_wishlist()
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
}
