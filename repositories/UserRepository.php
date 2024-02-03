<?php
    include './models/User.php';
    
    // ktu e kena qit niher si field $conn qe me mujt me perdor amo kur e krijojm ni instanc t userrepository ja qojm connection, dmth new UserRepository(connection qe e marum prej database), dmth qita, a pe din deri qitu
    class UserRepository {
        private $conn = null;

        public function __construct($conn) { // dmth qitu n konstruktor e pranojm connection edhe ksaj variables qe e kem nalt ja jepum vleren qe na vjen ktu nalt, a pe din qe qito sjon t njejta po se ksaj ja kemi jep null,  edhe kta qe e kem ktu e pranojm veq kur krijohet instanca, ky osht parameter
            $this->conn = $conn;
        }
        
        // ktu e kem funksionin create qe e krijon userin qe ja qon si parameter, dmth si parameter e pranon ni instanc t klases User, t qisaj, e kena perdor tani queryn INSERT INTO user VALUES ??? 
        // kjo pi bjen si me shkrujt shembull INSERT INTO user(fullname, email, password) VALUES (riad, riad@gmail.com, 123), amo qito vlerat n kllapa i mer prej instances qe ja qon ti qitu, dmth e kena bo prepare e kena bo gati, nese u bo gati mir, athere shkon i mer vlerat prej insances qe ja ke qu, e ja qon qitu me qat metoden bind_param, ja kena shkrujt tre s-ja se 3 stringa ko mi pranu, edhe ja kena pa execute, a jem n rregull, pse 3 pikpytje a po passi a qa, fullname, email edhe passwordi a jon 3 vlera e dmth shkruhen me ???, ti qitu nuk i din vlerat edhe sdon shembull nese dikush ta vidh qit variabel me ti pa vlerat direkt, dmnth e kuptove qita po
        public function create(User $user) {
            $sql = 'INSERT INTO user(fullname, email, password) VALUES (?,?,?)';
            
            $prepared = $this->conn->prepare($sql);

            if ($prepared) {
                $fullname = $user->getFullname();
                $email = $user->getEmail();
                // a pe sheh funksionin password_hash ku e kena perdor, qe mos me u rujt passwordi direkt n databas ashtu me kan i ekspozum se kshtu edhe me ta vidh shembull databazen, kurr smunen me ta gjet passwordin
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