<?php


namespace App\DataFixtures;


use App\Entity\Article;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;


class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 50; $i++){
        $article = new Article();
        $faker  =  Factory::create('fr_FR');
        $article->setTitle(mb_strtolower($faker->sentence(6, true)));

        $slugify = new Slugify();
        $article->setSlug($slugify->generate($article->getTitle()));

        $article->setContent(mb_strtolower($faker->text(200)));
        $manager->persist($article);
        $article->setCategory($this->getReference('categorie_0'));
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];

    }

}