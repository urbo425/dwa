<?php
require('BaseSite.php');
require('ExampleSite1.php');
require('ExampleSite2.php');

class Router {
    public $sites = [];

    function __construct()
    {
        $this->sites[] = new ExampleSite1();
        $this->sites[] = new ExampleSite2();
    }

    
    public function getSite($domain)
    {
        foreach($this->sites as $site) {
            if($site->matches($domain))
                return $site;
        }

        return false;
    }

    // forces https from http
    public function forceHTTPS()
    {
        if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
            if(!headers_sent()) {
                header("Status: 301 Moved Permanently");
                header(sprintf(
                    'Location: https://%s%s',
                    $_SERVER['HTTP_HOST'],
                    $_SERVER['REQUEST_URI']
                ));
                exit();
            }
        }
    }
}
?>
