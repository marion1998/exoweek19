<?php
    class User {
        private $id;
        private $email;
        private $createdAt;
        public function __construct($id, $email, $createdAt){
            $this->id = $id;
            $this->email = $email;
            $this->createdAt = $createdAt;
        } 

        public function getId(){
            return $this->id;
        }

        public function setId($id){
             $this->id = $id;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail(){
            $this->email = $email;
        }

        public function getCreatedAt(){
            return $this->createdAt;
        }
    }
?>