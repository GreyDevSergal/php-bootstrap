<?php

namespace PHPBS\Components\Navbar\Dropdown;

use PHPBS\Load;
use PHPBS\ParamMissingException;

class NavbarDropdown
{

    private $content;

    function __construct(array $params = null, array $children = null)
    {
        
        $this->getNavbarDropdown($params, $children);

    }

    private function getNavbarDropdown(array $params = null, array $children = null)
    {

        if(!isset($params['active']))
        {

            $params['active'] = false;

        }

        $send = ['params' => $params, 'children' => $children];

        ob_start();
        Load::component('Navbar/Dropdown/NavbarDropdownComponent', $send);
        $this->content = ob_get_clean();
    }

    public function getContent()
    {

        return $this->content;
        
    }

}