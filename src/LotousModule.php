<?php

namespace Lotous\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Lotous Module Installer
 *
 * @author Elbert Tous <contact@lotous.com.co>
 */
class LotousModule implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $LotousInstaller = new LotousInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($LotousInstaller);

    }

} 
