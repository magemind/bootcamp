
<?php

    class Car implements DriveInterface
    {

        protected $ps;

        public function __construct($ps) {

            $this->ps = $ps;
            $this->showPs(192);

        }

        public function drive($location) 
        {
            var_dump("Ein Auto ist am fahren {$location} <br />");
           // showPs($ps);
        }

        public function showPs($ps) 
        {
            var_dump(" mit {$ps} PS");
        }

    }


    