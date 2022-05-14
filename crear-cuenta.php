<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices-Registro</title>
    <link rel="icon" href="src/img/favicon.ico">
    <link rel="stylesheet" href="src/scss/internas/_registro.scss" class="ref">
</head>
<body class="body">
    <form action="" method="POST" id="form-registro" >
            <div class="form">
                <h1 class="">Registro</h1>
                <div class="grupo">
                    <input class="input-rgistro" type="text" name="" id="name" required><span class="barra-registro"></span>
                    <label for="" class="registro-label">Nombre</label>
                </div>
                <div class="grupo">
                    <input class="input-rgistro" type="email" name="" id="name" required><span class="barra-registro"></span>
                    <label for="" class="registro-label">Email</label>
                </div>
                <div class="grupo">
                    <input class="input-rgistro" type="password" name="" id="name" required><span class="barra-registro"></span>
                    <label for="" class="registro-label">Password</label>
                </div>

                <button class="button-registro" type="submit">Registrarte</button>
            
            </div>
        </form>
</body>
</html>
    