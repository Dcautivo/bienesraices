<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienes Raices | Log in</title>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <script src="https://kit.fontawesome.com/1263a3fbcb.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="../public/fawesome/js/all.min.js"></script>
    <script src="../public/js/bootbox.min.js"></script> -->
    <!-- Nuestro css Sin Internet-->
    <!-- <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css"> -->
    <!-- Nuestro css-->
    <!-- <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="src/scss/internas/_login.scss">
    <link rel="icon" href="src/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="src/css/loginload.css">
    
    <?php

        require 'includes/funciones.php';

        incluirTemplate('header');


        ?> 

</head>
<body class="inicio-sesion">
    <div id="body-load" style="display: none;"><img style="margin-left: 0px;" src="src/img/spinning-circles.svg"></div>
    <div class="modal-dialog text-center">
        <div class="col-sm-9 main-section">
            <div class="modal-content">
                <div id="logo-img" class="col-12 user-img">
                    <img clas="img-inicio"src="src/img/logo-inicio.webp"/>
                </div>
                <form class="col-12" method="POST" id="formulario">
                <div class="form-group" id="user-group">
                        <i class="fa fa-user user-icon"></i>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="usuario" name="usuario" autofocus/>
                        
                    </div>
                    <div class="form-group" id="contrasena-group">
                        
                        <input type="password" class="form-control" placeholder="Contrasena" id="password" name="password"/>
                    </div>
                      
                    
                    <div class="pass-recovery">
                        <a class="recuperar" href="#">
                            <font>¿Has olvidado tu contraseña?</font>
                        </a>
                        <p class="recuperar">
                            <input type="checkbox">
                            <font>Recuérdame</font>
                        </p>
                    </div>

                    <button id="btningresar" type="submit" class="btn btn-secondary"><i class="fas fa-sign-in-alt"></i>Ingresar</button>

                    <h1 class="recuperar">¿No tienes una cuenta? <a class="Registro" href="crear-cuenta.php">Registrate</a></h1>
                </form>

                <div id="denied" class="alert alert-danger" role="alert" style="display: none;">
		            Usuario y/o Contraseña incorrectos.
		        </div>
		        <div id="success" class="alert alert-success" role="alert" style="display: none;">
		            BIENVENIDO.
		        </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- <script src="scripts/login.js"></script> -->
