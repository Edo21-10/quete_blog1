<?php
// src/Controller/BlogController.php
namespace App\Controller;


use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * Show all row from article's entity
     *
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()
            ->getRepository (Article::class)
            ->findAll();
        return $this->render(
            'blog/index.html.twig',
            ['articles' => $articles]
        );
    }

    /**
     * Getting an article with a formatted slug for
     *
     * @param string $slug The slugger
     *
     * @Route("/{slug}",
     *     defaults={"slug" = null},
     *     name="blog_show")
     * @return Response A response instance
     */
    public function show(?string $slug): Response
    {
        if (!$slug){
            throw $this
                ->createNotFoundException('No slug has been sent to find an article\'s table.');
        }

        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );

        $article = $this->getDoctrine()->getRepository(Article::class)->findOneBy(['title' => mb_strtolower($slug)]);

        return $this->render(
            'show.html.twig',
            [
                'article' => $article,
                'slug' => $slug,
            ]
        );
    }

    /**
    // * @return Response A response instance
    //* @Route("/blog/category/{categoryName}",
    //*     defaults={"categoryName" =  null},
    //*     name="category_show",)
     */

    //public function showByCategory (string $categoryName): Response
    //{
    //$category = $this->getDoctrine()
    // ->getRepository(Category::class)
    //->findOneBy(['name' => $categoryName]);

    // $article = $this->getDoctrine()
    // ->getRepository(Article::class)
    // ->findBy(['category' => $category],
    //['id' => 'DESC'], 3);

    /**
     * @route("/blog/category/{id}",
     *     name="category_show")
     * @return Response A response instance
     */
    public function showByCategory(Category $category): Response
    {
        $articles = $category->getArticles();
        $name = $category->getName();
        return $this->render(
            'blog/category.html.twig',
            ['articles' => $articles, 'name' => $name ]);
    }
}


