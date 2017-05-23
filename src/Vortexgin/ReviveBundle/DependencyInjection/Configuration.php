<?php

namespace Vortexgin\ReviveBundle\DependencyInjection;

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
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vortexgin_revive');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
            ->children()
                ->arrayNode('doctrine')
                    ->children()
                        ->scalarNode('entity_manager')
                            ->isRequired()
                        ->end()
                        ->scalarNode('table_prefix')
                            ->isRequired()
                        ->end()
                    ->end()
                    ->isRequired()
                ->end()
                ->arrayNode('subscriber')
                    ->children()
                        ->scalarNode('table_prefix')
                            ->isRequired()
                        ->end()
                    ->end()
                    ->isRequired()
                ->end()
                ->arrayNode('manager')
                    ->children()
                        ->scalarNode('accounts')
                            ->isRequired()
                        ->end()
                        ->scalarNode('adzoneassoc')
                            ->isRequired()
                        ->end()
                        ->scalarNode('affiliates')
                            ->isRequired()
                        ->end()
                        ->scalarNode('agency')
                            ->isRequired()
                        ->end()
                        ->scalarNode('banners')
                            ->isRequired()
                        ->end()
                        ->scalarNode('campaigns')
                            ->isRequired()
                        ->end()
                        ->scalarNode('clients')
                            ->isRequired()
                        ->end()
                        ->scalarNode('zones')
                            ->isRequired()
                        ->end()
                    ->end()
                    ->isRequired()
                ->end()
                ->arrayNode('class')
                    ->children()
                        ->scalarNode('accounts')
                            ->isRequired()
                        ->end()
                        ->scalarNode('adzoneassoc')
                            ->isRequired()
                        ->end()
                        ->scalarNode('affiliates')
                            ->isRequired()
                        ->end()
                        ->scalarNode('agency')
                            ->isRequired()
                        ->end()
                        ->scalarNode('banners')
                            ->isRequired()
                        ->end()
                        ->scalarNode('campaigns')
                            ->isRequired()
                        ->end()
                        ->scalarNode('clients')
                            ->isRequired()
                        ->end()
                        ->scalarNode('zones')
                            ->isRequired()
                        ->end()
                    ->end()
                    ->isRequired()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
