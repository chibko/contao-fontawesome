<?php

namespace Chibko\Contao\Fontawesome\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Chibko\Contao\Bootstrap4\ChibkoContaoBootstrap4Bundle;


class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        $bundle = new BundleConfig(ChibkoContaoFontawesomeBundle::class);
        $bundle->setLoadAfter([ContaoCoreBundle::class]);

        return [$bundle];
    }
}
