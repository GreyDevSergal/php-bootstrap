<?php

namespace PHPBS\Components;

use PHPBS\Components\Navbar\Navbar;

class ComponentList
{

    public function Navbar(array $params = null, array $children = null)
    {

        new Navbar($params, $children);

    }

}