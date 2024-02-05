<?php
    class User {
        private $id;
        private $fullname;
        private $email;
        private $password;

        public function __construct($fullname, $email, $password) {
            $this->fullname = $fullname;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId() { return $this->id; }
        public function getFullname() { return $this->fullname; }
        public function setFullname($fullname) { $this->fullname = $fullname; }
        public function getEmail() { return $this->email; }
        public function setEmail($email) { $this->email = $email; }
        public function getPassword() { return $this->password; }
    }
?>
