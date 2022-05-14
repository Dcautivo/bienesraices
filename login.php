<?php

    //Conexion a base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    session_start();
    if(isset($_SESSION['login'])) {
        header('Location: /');
    }
    //Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // var_dump($_POST);

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)){
            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
            $resultado = mysqli_query($db, $query);
            

            if($resultado->num_rows) {
                //Revisar si el pssword es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                //Verificar si el password es correcto  o no 
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    //El usuario es autenticado
                    session_start();

                    //Llenar el arreglo de la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    //Redirige a admin
                    header('Location: /admin');
                    
                } else {
                    $errores[] = "El password es incorrecto";
                }
            } else {
                $errores[] = "Usuario no existe";
            }

        }
    }



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienes Raices | Log in</title>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <script src="https://kit.fontawesome.com/1263a3fbcb.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="../public/fawesome/js/all.min.js"></script>
    <!-- Nuestro css Sin Internet-->
    <!-- <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css"> -->
    <!-- Nuestro css-->
    <!-- <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="src/scss/internas/_login.scss">
    <!-- <link rel="icon" href="src/img/favicon.ico"> -->
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
                    <img clas="img-inicio"src="src/img/logo-modal.jpg"/>
                </div>
                <form class="col-12" method="POST" id="formulario">
                    <?php foreach($errores as $error): ?>
                        <div class="alerta errores">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach; ?>    

                    <div class=" w3l-form-group">
                        <label class="form-label">Usuario:</label>
                        <div class="group">
                            <i class="fas fa-user"></i>
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required"/>
                        </div>
                    </div>
                    <div class=" w3l-form-group">
                        <label class="form-label">Contraseña:</label>
                        <div class="group">
                            <i class="fas fa-unlock"></i>
                            <input type="password" name="password" class="form-control" placeholder="Tu Password" required="required"/>
                        </div>
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
