<?php

namespace MH\Base\Composer;

use Composer\Script\Event as Event;
use TYPO3\CMS\Composer\Plugin\Config;
use TYPO3\CMS\Composer\Plugin\Util\Filesystem;

class InstallScript
{
    const LOCAL_EXTENSION_PATH = '../ext';

    public static function runPostInstallCommand(Event $event)
    {
        $config = Config::load($event->getComposer());
        $filesystem = new Filesystem();

        $installDir = realpath($config->getBaseDir());
        $webDir = realpath($config->get('web-dir'));

        // Symlink extensions
        $localExtPath = realpath(self::LOCAL_EXTENSION_PATH);
        $typo3ExtPath = $webDir . '/typo3conf/ext';
        if ($localExtPath) {
            if ($handle = opendir($localExtPath)) {
                while (false !== ($extension = readdir($handle))) {
                    if ($extension != "." && $extension != "..") {
                        $sourceDir = $localExtPath . '/' . $extension;
                        $targetDir = $typo3ExtPath . '/' . $extension;
                        if (!file_exists($targetDir)) {
                            $filesystem->symlink($sourceDir, $targetDir);
                        }
                    }
                }
                closedir($handle);
            }
        }

        // Symlink AdditionalConfiguration
        $configurationPath = $webDir . '/typo3conf/' . 'AdditionalConfiguration.php';
        if (!file_exists($configurationPath)) {
            $filesystem->symlink(
                $installDir . '/' . static::LOCAL_EXTENSION_PATH . '/mh_base/Configuration/AdditionalConfiguration.php',
                $configurationPath
            );
        }

        // Symlink realurl_conf
        $realUrlConfPath = $webDir . '/typo3conf/' . 'realurl_conf.php';
        if (!file_exists($realUrlConfPath)) {
            $filesystem->symlink(
                $installDir . '/' . static::LOCAL_EXTENSION_PATH . '/mh_base/Configuration/realurl_conf.php',
                $realUrlConfPath
            );
        }

        // Symlink robots.txt
        $robotsTxtDir = $webDir . '/' . 'robots.txt';
        if (!file_exists($robotsTxtDir)) {
            $filesystem->symlink(
                $installDir . '/' . static::LOCAL_EXTENSION_PATH . '/mh_base/Configuration/robots.txt',
                $robotsTxtDir
            );
        }

        // Set execution rights for the TYPO3 cli_dispatch
        $cliDipatchPath = $webDir . '/typo3/cli_dispatch.phpsh';
        if (substr(sprintf('%o', fileperms($cliDipatchPath)), -4) != '0774') {
            chmod($cliDipatchPath, 0774);
        }
    }

    public static function runPostUpdateCommand(Event $event)
    {
        static::runPostInstallCommand($event);
    }
}