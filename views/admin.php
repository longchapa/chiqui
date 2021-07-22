<?php

    include '../config/connection.php';
    $db = new connection();

    session_start();

    if(!isset($_SESSION["level"])){
        header('Location: ../index.php');
    } elseif($_SESSION["level"] == 2 ) {
        header('Location: user.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../web/css/style_index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <form action="../controllers/logoutController.php" >
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </header>
<div class=" container " style="width: 80%;margin: 0 auto;padding-top: 150px;">
        <div class="text_welcome">
           <span style="color:white;">Bienvenido <?php echo $_SESSION["user"];  ?></span> 
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">NOMBRE</th>
                <th scope="col">CAPACIDAD</th>
                <th scope="col">DIAS</th>
                <th scope="col">HORARIO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $db->courses();
                    while($curso = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td scope='col'>". $curso["name"]. "</td>";
                        echo "<td scope='col'>". $curso["capacity"]. "</td>";
                        echo "<td scope='col'>". $curso["weekdays"]. "</td>";
                        echo "<td scope='col'>". $curso["schedule"]. "</td>";
                        echo "</tr>";
                    }                                
                ?>
            </tbody>
        </table>
                
        <button type="button" class="btn_btn" data-toggle="modal" data-target="#add_course">
            Crear Curso
        </button>
        <div class="modal fade" id="add_course" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title" id="exampleModalLabel">Creacion de usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form action="../controllers/newCourseController.php" method="POST">
                                <div>
                                    <label class="label_style">Nombre Curso</label>
                                    <input name="course_name" type="text" required>
                                </div>
                                <div>
                                    <label class="label_style">Capacidad</label>
                                    <input name="capacity" type="number" required>
                                </div>
                                <div>
                                    <label class="label_style">Días de la semana</label>
                                    <input name="weekdays" type="text" required>
                                </div>
                                <div>
                                    <label class="label_style">Horario</label>
                                    <input name="schedule" type="text" required>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn_close" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn_submit">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>   
        </div>              
    </div>
</body>
</html>