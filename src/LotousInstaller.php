<?php

namespace Lotous\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Lotous Plugin Installer
 *
 * @author Elbert Tous <contact@lotous.com.co>
 */
class LotousInstaller extends LibraryInstaller
{
    public $packages = ["pack", "theme"];

    public function getInstallPath(PackageInterface $package)
    {
        $type = $package->getType();
        $names = $package->getNames();
        if (is_array($names)) {
            $names = $names[0];
        }

        if("pack" == $type) {
            list($vendor, $package) = explode("/", $names);

            return "packs/" . $vendor . "/" . $package;
        }

        if("theme" == $type) {
            list($vendor, $package) = explode("/", $names);

            return "themes/" . $vendor . "/" . $package;
        }

    }

    public function supports($packageType)
    {
        return in_array($packageType, $this->packages);
    }
} 