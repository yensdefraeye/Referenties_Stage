<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
         $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        // $product = new Product();
        // $manager->persist($product);
        $user1 = new User();
        $user1->setPassword($this->passwordEncoder->encodePassword(
            $user1->setEmail('yens.defraeye@student.odisee.be'),
            'Azerty123'
        ));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2->setEmail('bart.cannaerts@test.be'),
            'Azerty123'
        ));
        $manager->persist($user2);

        $manager->flush();
    }
}
