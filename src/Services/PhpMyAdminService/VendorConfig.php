<?php

namespace Nilgems\Datatools\Services\PhpMyAdminService;

/**
 * @property $autoloadFile
 * @property $tempDir
 * @property $changeLogFile
 * @property $licenseFile
 * @property $sqlDir
 * @property $configFile
 * @property $customHeaderFile
 * @property $customFooterFile
 * @property $versionCheckDefault
 * @property $localePath
 * @property $cacheDir
 * @property $versionSuffix
 */
class VendorConfig
{
    protected $config;

    public function __construct() {
        $this->config = config('datatool.phpmyadmin');
    }

    /**
     * Configuration is defined
     * @return bool
     */
    public function isDefined(): bool
    {
        return isset(
            $this->config['autoloadFile'],
            $this->config['tempDir'],
            $this->config['changeLogFile'],
            $this->config['licenseFile'],
            $this->config['sqlDir'],
            $this->config['configFile'],
            $this->config['customHeaderFile'],
            $this->config['customFooterFile'],
            $this->config['versionCheckDefault'],
            $this->config['localePath'],
            $this->config['cacheDir'],
            $this->config['versionSuffix']
        );
    }

    /**
     * Get the config properties
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->config[$name];
    }

    /**
     * Set the config properties
     * @param $name
     * @param $value
     * @return void
     */
    public function __set($name, $value) {
        $this->config[$name] = $value;
    }

    /**
     * Check the config is defined or not
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return array_key_exists($name, $this->config);
    }
}