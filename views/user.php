<?php

    include '../config/connection.php';
    $db = new connection();

    session_start();

    if(!isset($_SESSION["level"])){
        header('Location: ../index.php');
    } elseif($_SESSION["level"] == 1 ) {
        header('Location: admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/css/style_index.css">
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
            <div class="list_courses">Lista de Cursos</div>
                <thead>
                    <tr>
                    <th scope="col" class="courses">ID</th>
                    <th scope="col" class="courses">NOMBRE</th>
                    <th scope="col" class="courses">CAPACIDAD</th>
                    <th scope="col" class="courses">DIAS</th>
                    <th scope="col" class="courses">HORARIO</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = $db->courses();
                        while($curso = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td scope='col'>". $curso["id"]. "</td>";
                            echo "<td scope='col'>". $curso["name"]. "</td>";
                            echo "<td scope='col'>". $curso["capacity"]. "</td>";
                            echo "<td scope='col'>". $curso["weekdays"]. "</td>";
                            echo "<td scope='col'>". $curso["schedule"]. "</td>";
                            echo "</tr>";
                        }                                
                    ?>
                </tbody>
            </table>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">
                Registrarme en curso
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#outModal">
                Retirarme de curso
            </button>

            <!-- Modal Registro -->
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerLabel">Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID del curso</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                                    <small id="emailHelp" class="form-text text-muted">Ingresa el ID que aparece en la lista de cursos</small>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="modal fade" id="outModal" tabindex="-1" role="dialog" aria-labelledby="outLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="outLabel">Retiro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID del curso</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                                    <small id="emailHelp" class="form-text text-muted">Ingresa el ID que aparece en la lista de cursos</small>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Retirarse</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>              
    </div>
</body>
</html>