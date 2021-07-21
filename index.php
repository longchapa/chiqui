<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="./web/css/style_index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row" style="justify-content: center;margin: 100px 60px 60px 60px;">  
                <div class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" style="color: #925190eb; margin: 32px 0px 0px 0px;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
            </div> 
            <form action="./controllers/loginController.php" method="POST" style="margin: 120px;">            
                <div class="form-group">
                    <label class="label_login" >Email</label>
                    <input name="email" type="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="label_login">Password</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <button type="submit" class="btn_btn">Submit</button>
            </form>
            <div class="row"style="justify-content: center;">
            <button type="button" class=" btn_btn" data-toggle="modal" data-target="#add_user">
                Crear Usuario
            </button>
            <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form action="/controllers/newUserController.php" class="">
                                    <div>
                                        <label class="label_style">Nombres Completos</label>
                                        <input name ="full_name"type="text">
                                    </div>
                                    <div>
                                        <label class="label_style">Correo Electronico</label>
                                        <input name ="email"type="email">
                                    </div>
                                    <div>
                                        <label class="label_style">Password</label>
                                        <input name ="pasword"type="pasword">
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn_close" data-dismiss="modal">Close</button>
                            <button type="button" class="btn_submit">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class=" btn_btn" data-toggle="modal" data-target="#cursos">
                Ver Cursos
            </button>
            <div class="modal fade" id="cursos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="title" id="exampleModalLabel">Nuestros cursos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <form action="/controllers/newUserController.php">
                                    <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col" class="title_cursos">First</th>
                                            <th scope="col" class="title_cursos">Last</th>
                                            <th scope="col" class="title_cursos">Handle</th>
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
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn_close" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>            
        </div>        
    </div>
</body>
</html>