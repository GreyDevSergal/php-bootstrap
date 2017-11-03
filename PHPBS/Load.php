<?php

namespace PHPBS;

/**
 * Load
 *
 *
 * @package PHP-Bootstrap
 * @subpackage PHPBS
 * @author Grey <luukwauben@hotmail.nl>
*/
class Load
{

    /**
     *
     * get component
     *
     * @param string $file (file name of component to be loaded)
     * @param array $vars (an array of variables to be used in the to require file)
    */
    public static function component(string $file, array $vars = [])
    {

        $file = str_replace("::", "/", $file);

        if(file_exists("PHPBS/Components/{$file}.php"))
        {
            
            extract($vars);
            require("Components/{$file}.php");

        }

    }

}