<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Entity\User;
use App\Entity\UserProfile;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use App\Repository\UserProfileRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [
        ['message' => 'Hello', 'created' => '2022/06/12'],
        ['message' => 'Hi', 'created' => '2022/04/12'],
        ['message' => 'Bye!', 'created' => '2021/05/12']
    ];

    #[Route('/', name: 'app_index')]
    public function index(MicroPostRepository $posts, CommentRepository $comments): Response
    {
//         $post = new MicroPost();
//         $post->setTitle('Hello');
//         $post->setText('Hello');
//         $post->setCreated(new DateTime());

//        $post = $posts->find(5);
//        $comment = $post->getComments()[0];
//         $post->removeComment($comment);
//         $posts->add($post, true);
//        $comment->setPost(null);
//        $comments->save($comment, true);

//         dd($post);

//        $comment = new Comment();
//        $comment->setText('Hello');
//        $comment->setPost($post);
//         $post->addComment($comment);
//         $posts->add($post, true);
//        $comments->save($comment, true);

//         $user = new User();
//         $user->setEmail('email@email.com');
//         $user->setPassword('12345678');
//
//         $profile = new UserProfile();
//         $profile->setUser($user);
//         $profiles->save($profile, true);

//         $profile = $profiles->find(1);
//         $profiles->remove($profile, true);

        return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
                'limit' => 3
            ]
        );
    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne(int $id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );
    }
}