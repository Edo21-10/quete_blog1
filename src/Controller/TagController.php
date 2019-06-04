<?php

namespace App\Controller;



use App\Entity\Tag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TagController extends AbstractController
{
    /**
     * @Route("/blog/tag/{name}", name="show_tag")
     * @return Response A response instance
     */

    public function showByTag(Tag $tag): Response
    {
        $articles = $tag->getArticles();
        return $this->render('blog/tag.html.twig', ["articles" => $articles, "tag" => $tag]);
    }
}

