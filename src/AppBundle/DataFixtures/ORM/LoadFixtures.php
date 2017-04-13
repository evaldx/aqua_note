<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.13.4
 * Time: 13:26
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $genus = new Genus();
        $genus->setName('Octopus'.rand(1, 100));
        $genus->setSubFamily('Octopodienae');
        $genus->setSpeciesCount(rand(100, 99999));

        $manager->persist($genus);
        $manager->flush();
    }
}