<?php

    namespace source\Qualifielt;

    class User{
        
        private $firstName;
        private $lastName;
        private $email;

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->fisrtName = $firstName;
        }

        public function getLastName(){
                return $this->lastName;
        }

        public function setLastName($lastName){
                $this->lastName = $lastName;
                return $this;
        }
    
        public function getEmail(){
                return $this->email;
        }

        public function setEmail($email){
                $this->email = $email;
                return $this;
        }
    }