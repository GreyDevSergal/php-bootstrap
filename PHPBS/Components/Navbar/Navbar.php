<?php

namespace PHPBS\Components\Navbar;

use PHPBS\Load;
use PHPBS\ParamMissingException;

class Navbar
{
    
    private $navbar;

    function __construct(array $params = null, array $children = null)
    {
        
        $this->getNavbar($params, $children);

    }

    private function getNavbar(array $params = null, array $children = null)
    {

        $send = ['params' => $params, 'children' => $children];

        if(!isset($params['theme']) || $params['theme'] == '')
        {

            $send['params']['theme'] = 'light';
            $params['theme'] = 'light';

        }

        if(!isset($params['classes']))
        {

            $send['params']['classes'] = '';
            $params['classes'] = '';

        }

        if(!isset($params['link-pos']) || $params['link-pos'] == '')
        {

            $send['params']['link-pos'] = 'ml';
            $params['link-pos'] = 'ml';

        }

        if($params['link-pos'] == 'left')
        {

            $send['params']['link-pos'] = 'mr';
            $params['link-pos'] = 'mr';

        }

        if($params['link-pos'] == 'right')
        {

            $send['params']['link-pos'] = 'ml';
            $params['link-pos'] = 'ml';

        }

        ob_start();
        Load::component('Navbar/NavbarComponent', $send);
        $this->navbar = ob_get_clean();
        
    }

    public function getContent()
    {

        return $this->navbar;

    }

}