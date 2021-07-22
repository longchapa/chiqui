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

            return $this->connection;
        }

        public function createUser($name, $password, $email){
            $sql = "insert into users (full_name, password, email, acces_level) values ('$name', '$password', '$email', 2)";
            if(!$this->connection->query($sql)){
                echo $this->connection->error;
                return $this->connection->error;
            }else{
                return TRUE;
            }
        }

        public function createCourse($name, $capacity, $weekdays, $schedule){
            $sql = "insert into courses (name, capacity, weekdays, schedule) values ('$name', '$capacity', '$weekdays', '$schedule')";
            echo $sql;
            if(!$this->connection->query($sql)){
                echo $this->connection->error;
            }
        }

        public function query($query){
            $result = $this->connection->query($query);
            return $result;
        }

        public function courses(){
            $sql = 'select id, name, capacity, weekdays, schedule from courses';
            $result = $this->connection->query($sql);
            return $result;
        }
    }
    
?>