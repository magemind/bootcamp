<?php

    class Supercar extends Car implements DriveInterface
    {

        public function __construct($ps) 
        {

            parent::__construct($ps +500);

        }

        public function drive($location) {
            return "Ein SuperCar fährt in {$location}";
        }

      
    }
