<?php
    class Connection {

        public $host = 'localhost';
        public $user = 'root';
        public $password = 'Sfmb5ddd*';
        public $database = 'prueba';
        public $connection;

        public function __construct() {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($this->connection->connect_error) {
                return false;
            }
            echo "<script>";
            echo "console.log('Conectado a BD')";
            echo "</script>";
        }

        public function query($query){
            $result = $this->connection->query($query);
            return $result;
        }
    }
    
?>