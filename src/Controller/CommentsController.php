<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

use App\Entity\Comment;
use App\Entity\Report;
use Doctrine\ORM\EntityManagerInterface;

class CommentsController extends AbstractController
{
    /**
    * @Route("/comments/{id}/{page}", name="comments", methods={"GET"})
    */
    public function comments(int $id, int $page = 1)
    {
        $repository = $this->getDoctrine()->getRepository(Comment::class);
        $comments = $repository->findBy(
            ['id' => $id]
        );

        return $this->render('Comments/comments.html.twig', ['comments' => $comments]);
    }

    /**
    * @Route("/comments/delete", name="delete_comment", methods={"POST"})
    */
    public function delete_comment(Request $request, UserInterface $user){
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Comment::class);
        $userId = $user->getId();

        $movie_id = $request->query->get('page');

        $comment = $repository->findOneBy([
            'user_id' => $userId,
            'id' => $movie_id,
        ]);

        if($comment){
            $entityManager->remove($comment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comments', [
            'id' => $comment->getMovieId()
        ]);
    }

    /**
    * @Route("/comments/create", name="create_comment", methods={"POST"})
    */
    public function create_comment(Request $request, UserInterface $user){
        $entityManager = $this->getDoctrine()->getManager();

        $userId = $user->getId();
        $movie_id = $request->request->get('page');
        $comment_text = $request->request->get('comment');
        $created = new Assert\DateTime();

        $comment = new Comment();
        $comment->setUserId($userId);
        $comment->setCreated($created);
        $comment->setCommentText($comment_text);
        $comment->setMovieId($movie_id);

        $entityManager->persist($comment);
        $entityManager->flush();

        return $this->redirectToRoute('comments', [
            'id' => $comment->getMovieId()
        ]);
    }

    /**
    * @Route("/comments/edit", name="edit_comment", methods={"PUT"})
    */
    public function edit_comment(Request $request, UserInterface $user){
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Comment::class);

        $comment_id = $request->request->get('comment_id');
        $userId = $user->getId();

        $comment = $repository->find($comment_id);

        if (!$comment || $comment->getUserId() != $userId) {
            throw $this->createNotFoundException('Komentaras nerastas');
        }

        $comment->setUserId($userId);
        $comment->setCreated($created);
        $comment->setCommentText($comment_text);
        $comment->setMovieId($movie_id);

        $entityManager->flush();
        return $this->redirectToRoute('comments', [
            'id' => $comment->getMovieId()
        ]);
    }

    /**
    * @Route("/comments/report", name="report_comment", methods={"POST"})
    */
    public function report_comment(Request $request, UserInterface $user){
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Report::class);

        $comment_id = $request->request->get('comment_id');
        $report_text = $request->request->get('report_text');
        $type = $request->request->get('type');
        $userId = $user->getId();
        $created = new Assert\DateTime();

        $report = new Report();
        $report->setObjectType("comment");
        $report->setUserId($userId);
        $report->setObjectId($comment_id);
        $report->setCreated($created);

        $report_obj = $repository->findOneBy([
            'user_id' => $userId,
            'object_id' => $comment_id,
        ]);

        if(!$report_obj){
            $entityManager->persist($report);
            $entityManager->flush();
        }

        return $this->render('index.html.twig');
    }

    /**
    * @Route("/comments/rate", name="rate_comment", methods={"POST"})
    */
    public function rate_comment(Request $request, UserInterface $user){
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Comment::class);
        return $this->render('index.html.twig');
    }
}
