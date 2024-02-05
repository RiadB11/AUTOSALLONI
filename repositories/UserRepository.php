<?php
    include './models/User.php';
    
    class UserRepository {
        private $conn = null;

        public function __construct($conn) {
            $this->conn = $conn;
        }
        
       
        public function create(User $user) {
            $sql = 'INSERT INTO user(fullname, email, password) VALUES (?,?,?)';
            
            $prepared = $this->conn->prepare($sql);

            if ($prepared) {
                $fullname = $user->getFullname();
                $email = $user->getEmail();
                $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                
                $prepared->bind_param("sss", $fullname, $email, $password);
            
                $prepared->execute();

                // Check for success
                if ($prepared->affected_rows > 0) {
                    header('Location: login.php');
                } else {
                    echo "Error: " . $prepared->error;
                }

                $prepared->close();
            }
        }

        public function readById($id) {
            $sql = 'SELECT * FROM user WHERE id = ?';
            
            $prepared = $this->conn->prepare($sql);
            $results = [];
        
            if ($prepared) {
                $prepared->bind_param("i", $id);
        
                $prepared->execute();
        
                $result = $prepared->get_result();
        
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
        
                $prepared->close();
            }
            
            return $results;
        }

        public function readByEmail($email) {
            $sql = 'SELECT * FROM user WHERE email = ?';
            
            $prepared = $this->conn->prepare($sql);
            $results = [];
        
            if ($prepared) {
                $prepared->bind_param("s", $email);
        
                $prepared->execute();
        
                $result = $prepared->get_result();
        
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
        
                $prepared->close();
            }
            
            return $results;
        }

        public function login($email, $password) {
            $user = $this->readByEmail($email);
            
            if($user && is_array($user) && count($user) > 0) {
                if(password_verify($password, $user[0]['password'])) {
                    $_SESSION['is_loggedin'] = true;
                    $_SESSION['is_admin'] = ($user[0]['roli'] == "admin");
                    $_SESSION['user_id'] = $user[0]['id'];
                    $_SESSION['bilanci'] = $user[0]['bilanci'];
                } else {
                    return "Wrong password";
                }
            } else {
                return "User doesn't exist";
            }

        }

        public function getAllUsers() {
            $sql = 'SELECT * FROM user';
            
            $prepared = $this->conn->prepare($sql);
            $results = [];
        
            if ($prepared) {
                $prepared->execute();
        
                $result = $prepared->get_result();
        
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
        
                $prepared->close();
            }
            
            return $results;
        }

        public function editBalance($id, $balance) {
            $sql = 'UPDATE user SET bilanci = ? WHERE id = ?';
            
            $prepared = $this->conn->prepare($sql);
        
            if ($prepared) {
                $prepared->bind_param("ii", $balance, $id);
                $prepared->execute();
        
                if ($prepared->affected_rows > 0) {
                    echo "Record updated successfully.";
                } else {
                    echo "Error: " . $prepared->error;
                }

                $prepared->close();
            }
            
        }

    }
?>
