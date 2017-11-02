<?php

namespace PHPBS\Components;

use PHPBS\Components\Navbar\Navbar;
use PHPBS\Components\Navbar\Link\NavbarLink;

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

}