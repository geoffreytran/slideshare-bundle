<?php

namespace Zym\Bundle\SlideShareBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('zym_slide_share');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        $rootNode
        ->children()
            ->scalarNode('api_key')->end()
            ->scalarNode('shared_secret')->end()
            ->scalarNode('username')->defaultNull()->end()
            ->scalarNode('password')->defaultNull()->end()
        ->end();

        return $treeBuilder;
    }
}
