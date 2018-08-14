<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUsers
    extends Fixture
    implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $users = array(
            array(
                "email" => "roux.thibault@gmail.com",
                "username" => "thibault",
                "plainpassword" => "thibault",
                "enable" => true,
                "role" => "ROLE_ADMIN",
            ),
            array(
                "email" => "lisa@gmail.com",
                "username" => "lisa",
                "plainpassword" => "lisa",
                "enable" => true,
                "role" => "ROLE_USER",
            )

        );

        foreach($users as $userss) {
            $userManager = $this->container->get('fos_user.user_manager');

            $user = $userManager->createUser();
            $user->setEmail($userss["email"]);
            $user->setUsername($userss["username"]);
            $user->setPlainPassword($userss["plainpassword"]);
            $user->setEnabled($userss["enable"]);
            $user->addRole($userss["role"]);
            /* $this->addReference('user-admin', $user); */
            $userManager->updateUser($user);
        }
    }

    /**
     * Sets the container.
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Get the order of this fixture
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }

}