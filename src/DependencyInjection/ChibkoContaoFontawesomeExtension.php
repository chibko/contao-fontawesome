<?php

namespace Chibko\Contao\Fontawesome\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class ChibkoContaoFontawesomeExtension extends Extension
{
    /**
     * {@inheritdoc}
     */

    public function load(array $mergedConfig, ContainerBuilder $container)
    {
        /*$loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );*/

        //$loader->load('services.yml');
        //$loader->load('parameters.yml');
    }
}