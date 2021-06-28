<?php
namespace BWB\Framework\mvc;


class MicrosoftProvider{
    
    private $provider;

    public function __construct(){
        $DS = DIRECTORY_SEPARATOR;
        $directory = explode($DS, __DIR__);
        unset($directory[count($directory) - 1]);
        $root = implode($DS, $directory);
        $config = json_decode(
            file_get_contents($root . $DS . "config" . $DS . "config.json"),
            true
        )['microsoftProvider'];
        $this->provider = new \League\OAuth2\Client\Provider\GenericProvider($config);

        
    }
    public function getAuthorizationUrl(){
        return $this->provider->getAuthorizationUrl();
    }

    public function getAccessToken($type,$format){
        return $this->provider->getAccessToken($type,$format);
    }
}
