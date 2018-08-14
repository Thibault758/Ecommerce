<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Establishment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\EventDispatcher\Tests\TestEventSubscriberWithMultipleListeners;

class LoadEstablishments extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $establishments = array(
            array(
                "id" => 1,
                "designation" => "CoolKlop"
            ),
            array(
                "id" => 2,
                "designation" => "likoKlop"
            ),
            array(
                "id" => 3,
                "designation" => "MikaKlop"
            )
        );

        // create establishment! Bam!
        foreach($establishments as $esta) {
                $establishment = new Establishment();
                $establishment->setDesignation($esta["designation"]);
                $this->addReference('establishment_'.$esta["id"], $establishment);
                $manager->persist($establishment);
        }

        $manager->flush();
    }
}
