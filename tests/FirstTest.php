<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

class FirstTest extends TestCase
{

    /**
     * @var ContainerBuilder
     */
    private $container;

    public function setUp()
    {
        $this->container = new ContainerBuilder();
        $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__));
        $loader->load('services.yml');
//        $this->container = new ContainerBuilder();
//        $this->container->setParameter('mailer.transport', 'sendmail');
//        $this->container
//                ->register('mailer', 'AppBundle\Service\Mailer')
//                ->addArgument('%mailer.transport%');
//        ;
//
//        $this->container
//                ->register('newsletter_manager', 'AppBundle\Service\NewsletterManager')
//                ->addArgument(new Reference('mailer'));
    }

    public function testHello()
    {
        /* @var $newsletterManager \AppBundle\Service\NewsletterManager */
        $newsletterManager = $this->container->get('newsletter_manager');
        $this->assertEquals(100, $newsletterManager->getNumber());
    }

}
