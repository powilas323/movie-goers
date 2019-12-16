<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReviewsController extends AbstractController
{
    /**
     * @Route("/reviews/{page}", name="reviews_list")
     */
    public function reviews_list(int $page = 1)
    {
        return $this->render('Reviews/review_list.html.twig');
    }


    /**
     * @Route("/review/{slug}", name="review")
     */
    public function review(string $slug)
    {
        return $this->render('Reviews/review.html.twig');
    }
}
