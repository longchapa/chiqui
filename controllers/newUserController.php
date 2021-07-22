<?php

    session_start();

    include '../config/connection.php';
    $db = new connection();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = hash('sha256',$_POST['password']);

        $result = $db->createUser($full_name, $password, $email);

        if($result == 1){
            $_SESSION['new_user'] = 1;
            header('Location: ../index.php');
        }else{
            $_SESSION['new_user'] = 0;
            $_SESSION['error_user'] = $result;
            header('Location: ../index.php');
        }
    }
?>