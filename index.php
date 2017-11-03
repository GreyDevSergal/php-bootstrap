<?php
require_once('autoload.php');

//declaring dependencies
use PHPBS\Bootstrap;

//instanciating the bootstrap class
$bs = new Bootstrap();

//creating the page here
$bs->Navbar(['theme' => 'dark', 'text-color' => 'dark', 'link-pos' => 'right', 'brand' => 'PHP-Bootstrap', 'position' => ''], [
    $bs->NavbarDropdown(['content' => 'Social'], [
        $bs->NavbarDropdownLink(['href' => 'http://www.facebook.com', 'content' => 'Facebook', 'target' => '_blank']),
        $bs->NavbarDropdownLink(['href' => 'http://www.twitter.com', 'content' => 'Twitter', 'target' => '_blank']),
        $bs->NavbarDropdownLink(['href' => 'http://www.instagram.com', 'content' => 'Instagram', 'target' => '_blank']),
    ]),
    $bs->NavbarLink(['href' => 'https://github.com/UnknowAI/php-bootstrap', 'content' => 'Github', 'target' => '_blank']),
    $bs->NavbarLink(['href' => 'http://www.youtube.com', 'content' => 'Youtube', 'target' => '_blank'])
    
]);

//finally, load the page
$bs->loadPage();