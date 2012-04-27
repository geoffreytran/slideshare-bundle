<?php

namespace Zym\Bundle\SlideShareBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ZymSlideShareExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
    
        $container->setParameter('zym_slideshare.api_key', $configs['api_key']);
        $container->setParameter('zym_slideshare.shared_secret', $configs['shared_secret']);
        $container->setParameter('zym_slideshare.username', $configs['username']);
        $container->setParameter('zym_slideshare.password', $configs['password']);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
