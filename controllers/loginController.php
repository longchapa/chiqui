<?php

    session_start();

    include '../config/connection.php';
    $db = new connection();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from Form
        $email = $_POST['email'];
        $password = hash('sha256',$_POST['password']);
        $sql = "SELECT id, acces_level, full_name FROM users WHERE email='$email' and password='$password'";
        $result = $db->query($sql);
        $info = $result->fetch_assoc();
        $access_level = $info['acces_level'];
        $name = $info['full_name'];
        $count = $result->num_rows;

        if($count == 1 && $access_level == 1) {
            header('Location: ../views/admin.php');
            $_SESSION["user"] = $name;
            $_SESSION["level"] = $access_level;
        } elseif ($count == 1 && $access_level == 2) {
            header('Location: ../views/user.php');            
            $_SESSION["user"] = $name;
            $_SESSION["level"] = $access_level;
        } elseif ($count == 0) {
            header('Location: ../index.php');
        }
    }

?>