<?php

namespace Vortexgin\ReviveBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class VortexginReviveExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('vortexgin.revive.entity_manager', $config['doctrine']['entity_manager']);
        $container->setParameter('vortexgin.revive.prefix', $config['doctrine']['table_prefix']);
        $container->setParameter('vortexgin.revive.table_prefix', $config['subscriber']['table_prefix']);
        $container->setParameter('vortexgin.revive.manager.accounts', $config['manager']['accounts']);
        $container->setParameter('vortexgin.revive.manager.adzoneassoc', $config['manager']['adzoneassoc']);
        $container->setParameter('vortexgin.revive.manager.affiliates', $config['manager']['affiliates']);
        $container->setParameter('vortexgin.revive.manager.agency', $config['manager']['agency']);
        $container->setParameter('vortexgin.revive.manager.banners', $config['manager']['banners']);
        $container->setParameter('vortexgin.revive.manager.campaigns', $config['manager']['campaigns']);
        $container->setParameter('vortexgin.revive.manager.clients', $config['manager']['clients']);
        $container->setParameter('vortexgin.revive.manager.zones', $config['manager']['zones']);
        $container->setParameter('vortexgin.revive.class.accounts', $config['class']['accounts']);
        $container->setParameter('vortexgin.revive.class.adzoneassoc', $config['class']['adzoneassoc']);
        $container->setParameter('vortexgin.revive.class.affiliates', $config['class']['affiliates']);
        $container->setParameter('vortexgin.revive.class.agency', $config['class']['agency']);
        $container->setParameter('vortexgin.revive.class.banners', $config['class']['banners']);
        $container->setParameter('vortexgin.revive.class.campaigns', $config['class']['campaigns']);
        $container->setParameter('vortexgin.revive.class.clients', $config['class']['clients']);
        $container->setParameter('vortexgin.revive.class.zones', $config['class']['zones']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
