<?php

namespace PHPBS\Components;

use PHPBS\Components\Navbar\Navbar;
use PHPBS\Components\Navbar\Link\NavbarLink;
use PHPBS\Components\Navbar\Dropdown\NavbarDropdown;
use PHPBS\Components\Navbar\Dropdown\Link\NavbarDropdownLink;

class ComponentList
{
    protected $content;    

    public function Navbar(array $params = null, array $children = null)
    {

        $Navbar = new Navbar($params, $children);
        $this->content .= $Navbar->getContent();

    }

    public function NavbarLink(array $params = null)
    {

        $NavbarLink = new NavbarLink($params);

        return $NavbarLink->getContent();

    }

    public function NavbarDropdown(array $params = null, array $children = null)
    {

        $NavbarDropdown = new NavbarDropdown($params, $children);

        return $NavbarDropdown->getContent();

    }

    public function NavbarDropdownLink(array $params = null)
    {

        $NavbarDropdownLink = new NavbarDropdownLink($params);

        return $NavbarDropdownLink->getContent();

    }

}