<?php

//declaring dependancies
use PHPBS\Load;

namespace PHPBS
{

    /**
     * Bootstrap
     *
     * @package PHP-Bootstrap
     * @subpackage PHPBS
     * @author Grey <luukwauben@hotmail.nl>
    */
    class Bootstrap
    {

        //initializing variables
        private $content;
        private $rawhtmldependencies;
        private $links, $scripts, $meta;

        /**
         * Instanciate Bootstrap class
        */
        function __construct()
        {

            $this->rawhtmldependencies = $this->getHtmlDependacies();

        }

        /**
         * load the page
        */
        public function loadPage()
        {

            Load::component('init', ['bs'=>$this]);

        }

        /**
         * Get links like stylesheets
        */
        public function getLinks()
        {

            foreach($this->rawhtmldependencies['links'] as $dependance)
            {

                extract($dependance);
                $this->links .= "<link rel='{$rel}' href='{$href}' integrity='{$integrity}' crossorigin='{$crossorigin}'>";
                
            }
            return $this->links;

        }

        /**
         * get JS scripts and alike
        */
        public function getScripts()
        {

            foreach($this->rawhtmldependencies['scripts'] as $dependance)
            {

                extract($dependance);
                $this->scripts .= "<script src='{$src}' integrity='{$integrity}' crossorigin='{$crossorigin}'></script>";

            }
            return $this->scripts;

        }

        /**
         * get meta data
        */
        public function getMeta()
        {

            foreach($this->rawhtmldependencies['meta'] as $dependance)
            {

                extract($dependance);
                $this->meta .= "<meta name='${name}' content='${content}'>";

            }
            return $this->meta;

        }

        /**
         * push content to page
         *
         * @return string
        */
        public function getContent()
        {

            var_dump($this->content);

        }


        /**
         * get html dependancies like links, scripts and meta
         *
         * @param string $file_loc (location to a json file containing information on the html dependacies)
         * @return object
        */
        private function getHtmlDependacies($file_loc = "htmldependencies.json")
        {

            return json_decode(file_get_contents($file_loc), true);

        }

    }

}