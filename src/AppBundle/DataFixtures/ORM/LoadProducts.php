<?php


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Establishment;
use AppBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\EventDispatcher\Tests\TestEventSubscriberWithMultipleListeners;

class LoadProducts extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // create 20 products! Bam!
        for ($i = 1; $i < 30; $i++) {
          if($i % 2 == 1) {
            $product = new Product();
            $product->setName('Ecigarette numero: '.$i);
            $product->setPrice(mt_rand(10, 100));
            $product->setQuantity(mt_rand(10, 100));
            $product->setDescript("loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsumloremipsumloremipsum loremipsum");
            $product->setImage("ecigarette.jpg");
            $product->setCategory("Ecigarette");
            $product->setEstablishment($this->getReference("establishment_2"));
            $manager->persist($product);
          }
          else {
            $product = new Product();
            $product->setName('ELiquide numero: '.$i);
            $product->setPrice(mt_rand(10, 100));
            $product->setQuantity(mt_rand(10, 100));
            $product->setDescript("loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum loremipsumloremipsumloremipsum loremipsum");
            $product->setCategory("Eliquide");
            $product->setImage("eliquide.jpg");
            $product->setEstablishment($this->getReference("establishment_3"));
            $manager->persist($product);
          }
        }

        $manager->flush();
    }
}
