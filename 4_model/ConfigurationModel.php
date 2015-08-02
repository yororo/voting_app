<?php

class ConfigurationModel{
    private $configFileURL = 'config.xml';
    private $configFile;
    
    public function __construct() {
        if (file_exists($this->configFileURL)){
            $this->configFile = simplexml_load_file($this->configFileURL);
        } else{
            echo 'Failed to load config XML file at ' . $this->configFileURL;
        }
    }
    
    public function getSiteName() {
        if ($this->configFile != FALSE){
            return $this->configFile->siteName;
        }
    }
    
    public function getSecurityLevel() {
        if ($this->configFile != FALSE){
            return $this->configFile->securityLevel;
        }
    }
}

