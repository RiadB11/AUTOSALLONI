<?php
// qita e kupton edhe prej java, e kena bo ni klas t userit qe me mujt mja qu kur e krijojm shembull new User, ja kena qit edhe konstruktorin qe me mujt me ja qu n kllapa kto shembull new User(...);, id nuk pja qojm se e kem auto increment, dmth per secilin user rritet ka njo e dmth ja kem qu vetem class user class id ske nevoj, jo class user po ja kena qu veq fullname, email ehde passwordin se id spo na u duhet m ahhh ppopoooo
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