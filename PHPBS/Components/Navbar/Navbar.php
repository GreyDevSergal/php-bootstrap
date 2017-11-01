<?php

namespace PHPBS\Components\Navbar;

use PHPBS\Load;
use PHPBS\ParamMissingException;

class Navbar
{

    function __construct(array $params = null, array $children = null)
    {
        
        $this->getNavbar($params, $children);
        //var_dump($params, $children);

    }

    private function getNavbar(array $params = null, array $children = null)
    {

        $send = ['params' => $params, 'children' => $children];

        if(!isset($params['theme']) || $params['theme'] == '')
        {

            new ParamMissingException("theme is not set in Navbar");

        }

        Load::component('Navbar/NavbarComponent', $send);
        
    }

}