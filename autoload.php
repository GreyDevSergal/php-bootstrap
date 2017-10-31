<?php

//load all files into memory
spl_autoload_register(function($class)
{

    if(file_exists(str_replace('\\', '/', $class) . '.php'))
    {

        require_once(str_replace('\\', '/', $class)  . '.php');

    }

});