<?php
require_once('autoload.php');

//declaring dependencies
use PHPBS\Bootstrap;
use PHPBS\Components\Test;

//instanciating the bootstrap class
$bs = new Bootstrap();

//creating the page here

$bs->Navbar(['theme' => 'dark', 'text-color' => 'dark', 'link-pos' => 'right', 'brand' => 'PHP-Bootstrap'], [
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'text' => 'Github'])
]);

//finally, load the page
$bs->loadPage();