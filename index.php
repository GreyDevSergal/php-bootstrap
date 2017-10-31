<?php
require_once('Bootstrap.php');
use PHPBS\Bootstrap;

$bs = new Bootstrap();

if(!file_exists("init.php"))
{

    echo("init.php not found");
    die();

}

require_once("init.php");