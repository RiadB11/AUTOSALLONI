<?php
    class Car {
        private $id;
        private $emri;
        private $kilometrazhi;
        private $viti;
        private $motorri;
        private $foto;
        private $qmimi;

        public function __construct($emri, $kilometrazhi, $viti, $motorri, $foto, $qmimi) {
            $this->emri = $emri;
            $this->kilometrazhi = $kilometrazhi;
            $this->viti = $viti;
            $this->motorri = $motorri;
            $this->foto = $foto;
            $this->qmimi = $qmimi;
        }

        public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getEmri() {
            return $this->emri;
        }
    
        public function setEmri($emri) {
            $this->emri = $emri;
        }
    
        public function getKilometrazhi() {
            return $this->kilometrazhi;
        }
    
        public function setKilometrazhi($kilometrazhi) {
            $this->kilometrazhi = $kilometrazhi;
        }
    
        // Getter for $viti
        public function getViti() {
            return $this->viti;
        }
    
        // Setter for $viti
        public function setViti($viti) {
            $this->viti = $viti;
        }
    
        public function getMotorri() {
            return $this->motorri;
        }
    
        public function setMotorri($motorri) {
            $this->motorri = $motorri;
        }
    
        public function getFoto() {
            return $this->foto;
        }
    
        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getQmimi() {
            return $this->qmimi;
        }
    
        public function setQmimi($qmimi) {
            $this->qmimi = $qmimi;
        }

    }
?>