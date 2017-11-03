<?php

namespace PHPBS\Components\Navbar\Dropdown\Link;

use PHPBS\Load;
use PHPBS\ParamMissingException;

class NavbarDropdownLink
{

    private $content;

    function __construct(array $params = null)
    {
        
        $this->getNavbarDropdownLink($params);

    }

    private function getNavbarDropdownLink(array $params = null)
    {

        if(!isset($params['target']))
        {

            $params['target'] = '_self';

        }

        $send = ['params' => $params];

        ob_start();
        Load::component('Navbar/Dropdown/Link/NavbarDropdownLinkComponent', $send);
        $this->content = ob_get_clean();

    }

    public function getContent()
    {

        return $this->content;
        
    }

}