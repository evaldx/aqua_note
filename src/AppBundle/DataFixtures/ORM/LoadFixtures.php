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
use Nelmio\Alice\Fixtures;


class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        Fixtures::load(__DIR__.'/fixtures.yml', $manager);
    }
}