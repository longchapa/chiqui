<?php

    session_start();

    include '../config/connection.php';
    $db = new connection();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['course_name'];
        $capacity = $_POST['capacity'];
        $weekdays = $_POST['weekdays'];
        $schedule = $_POST['schedule'];
        

        $db->createCourse($name, $capacity, $weekdays, $schedule);

        header("Location: ../views/admin.php");
    }
?>