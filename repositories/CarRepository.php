<?php
    include './models/Car.php';
    
    class CarRepository {
        private $conn = null;

        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function create(Car $car) {
            $sql = 'INSERT INTO car(emri, kilometrazhi, viti, motorri, foto, qmimi) VALUES (?,?,?,?,?,?)';
            
            $prepared = $this->conn->prepare($sql);

            if ($prepared) {
                $emri = $car->getEmri();
                $kilometrazhi = $car->getKilometrazhi();
                $viti = $car->getViti();
                $motorri = $car->getMotorri();
                $foto = $car->getFoto();
                $qmimi = $car->getQmimi();
                
                $prepared->bind_param("sisssi", $emri, $kilometrazhi, $viti, $motorri, $foto, $qmimi);
            
                $prepared->execute();

                if ($prepared->affected_rows > 0) {
                    move_uploaded_file($_FILES['car_file']['tmp_name'], 'photos/' . $foto);
                    echo "Record inserted successfully.";
                } else {
                    echo "Error: " . $prepared->error;
                }
                
                $prepared->close();
            }
        }

        
        public function readUnowned() {
            $sql = 'SELECT * FROM car WHERE owner_id is null';
            
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

        public function readLastTenUnowned() {
            $sql = 'SELECT * FROM car WHERE owner_id is null LIMIT 10';
            
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

        public function readById($id) {
            $sql = 'SELECT * FROM car WHERE id = ?';
            
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

        public function readByOwnerId($owner_id) {
            $sql = 'SELECT * FROM car WHERE owner_id = ?';
            
            $prepared = $this->conn->prepare($sql);
            $results = [];
        
            if ($prepared) {
                $prepared->bind_param("i", $owner_id);

                $prepared->execute();
        
                $result = $prepared->get_result();
        
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
        
                $prepared->close();
            }
            
            return $results;
        }

        public function buyCar($id, $owner_id) {
            $sql = 'UPDATE car SET owner_id = ? WHERE id = ?';
            
            $prepared = $this->conn->prepare($sql);
            $results = [];
        
            if ($prepared) {
                $prepared->bind_param("ii", $owner_id, $id);

                $prepared->execute();

                if ($prepared->affected_rows > 0) {
                    echo "Record updated successfully.";
                } else {
                    echo "Error: " . $prepared->error;
                }
        
                $prepared->close();
            }
            
            return $results;
        }


    }
?>