<?php
require_once('autoload.php');

//declaring dependencies
use PHPBS\Bootstrap;
use PHPBS\Components\Test;

//instanciating the bootstrap class
$bs = new Bootstrap();

//creating the page here
/* SOME CODE HERE */

$bs->Navbar([
    'theme' => 'dark',
    'brand' => 'PHP-Bootstrap',
    'classes' => 'customClass opacity2'
], [
    // $bs->NavTitle([]),
    // $bs->Dropdown([], [
    //     $bs->Link([]),
    //     $bs->Link([])
    // ]),
    // $bs->Link([])
]);

//finally, load the page
$bs->loadPage();