<?php

    session_start();

    if(!isset($_SESSION["level"]) || $_SESSION["level"] == 2 ){
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../web/css/style_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class=" container " style="width: 80%;margin: 0 auto;padding-top: 150px;">
        <div class="text_welcome">
           <span style="color:white;">Bienvenido <?php echo $_SESSION["user"];  ?></span> 
        </div>
        <div>
            <table class="table">
            <div class="list_courses">Lista de Cursos</div>
                <thead>
                    <tr>
                    <th scope="col" class="courses">NOMBRE</th>
                    <th scope="col" class="courses">HORARIO</th>
                    <th scope="col" class="courses">DIAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>          
            <button type="button" class="btn btn-outline-primary">Agregar nuevo Curso</button>
        </div>   
        </div>              
    </div>
</body>
</html>