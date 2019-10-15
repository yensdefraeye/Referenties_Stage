<?php

namespace App\DataFixtures;

use App\Entity\Concerts;
use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $concertOne = new Concerts();
        $concertOne->setTitle('Tomorrowland');
        $concertOne->setLocation('De Schorre, Boom');
        $concertOne->setPrice(281.00);
        $concertOne->setFav(false);
        $concertOne->setStartDate(new \DateTime('2017-07-21 10:00:00'));

        $manager->persist($concertOne);

        $concertTwo = new Concerts();
        $concertTwo->setTitle('Finale HUMO\'\'s Rock Rally');
        $concertTwo->setLocation('AB, Brussel');
        $concertTwo->setPrice(14.00);
        $concertTwo->setFav(false);
        $concertTwo->setStartDate(new \DateTime('2018-04-10 15:00:00'));

        $manager->persist($concertTwo);


        $image1 = new Image();
        $image1->setConcertId(5);
        $image1->setPath('tomorrow1.jpg');

        $manager->persist($image1);

        $image2 = new Image();
        $image2->setConcertId(5);
        $image2->setPath('tomorrow2.jpg');

        $manager->persist($image2);

        $image3 = new Image();
        $image3->setConcertId(6);
        $image3->setPath('rally1.jpg');

        $manager->persist($image3);

        $image4 = new Image();
        $image4->setConcertId(6);
        $image4->setPath('rally2.jpg');

        $manager->persist($image4);

        $manager->flush();
    }
}
