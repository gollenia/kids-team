<?php

// Debug-Hack. Kommt später weg
$url =  'http://' . $_SERVER['SERVER_NAME'];
$url = explode(".", parse_url($url, PHP_URL_HOST));
$url = end($url);
if (!isset($_GET['dev']) && $url == "at") {
    header("Location: http://www.kids-team.com/at");
    exit();
} 

/**
 * First we need to load the Composer Autoload which is responsinble for making Classes available
 * 
 * @link https://getcomposer.org/
 */
require_once( __DIR__ . '/vendor/autoload.php' );

// either set choose config files manually or scan whole directory
// $config_array = ["site", "theme_support", "fields", "mimes", "assets", "routes", "widgets"];

$config = new \Contexis\Core\Config(
    get_template_directory() . "/config/", 
    /* $config_array */ false
);

// the site-object stores information about the whole site. It is later passed to twig.

$site = new Contexis\Core\Site($config);




