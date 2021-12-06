<?php

    class User{
        
        public $firstName;
        public $lastName;
        public $email;

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->fisrtName = $firstName;
        }

    }