<?php

namespace PHPBS;

class ParamMissingException
{

    function __construct($message)
    {

        echo('<pre style="color:red">' . $message . !'</pre>');
        die();        

    }

}