<?php

namespace PHPBS
{

    class Bootstrap
    {

        private $content;
        private $rawhtmldependencies;
        private $htmldependencies;

        function __construct()
        {

            $this->rawhtmldependencies = $this->getHtmlDependacies();

        }

        public function getLinks()
        {

            foreach($this->rawhtmldependencies['links'] as $dependance)
            {
                explode($dependance);
                $this->htmldependencies .= "<link rel='{$rel}' href='{$href}' integrity='{$integrity}' crossorigin='{$crossorigin}'";
            }

            return $this->htmldependencies;
            // var_dump($this->rawhtmldependencies);

        }

        public function getContent()
        {

            var_dump($this->content);

        }

        private function getHtmlDependacies($file_loc = "htmldependencies.json")
        {

            return json_decode(file_get_contents($file_loc));

        }

    }

}