<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="src/scss/layout/_redes.scss">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="#" class="fa-brands fa-facebook"></a>
            <a href="#" class="fa-brands fa-youtube"></a>
            <a href="#" class="fa-brands fa-whatsapp"></a>
            <a href="#" class="fa-brands fa-facebook-messenger"></a>
        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="icon-mas2 fa-solid fa-plus"></label>
        </div>
    </div>
</body>
</html> -->

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
    <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="src/scss/layout/_redes.scss">
    <title>Document</title>
</head>
<body>
    <div class="colaborador">
        <div class="card">
        <!-- <img class="card-encabezado" src="src/img/colaborador1.jpeg" alt=""> -->
            <div class="figuras">
                <img class="card-encabezado" src="src/img/colaborador1.jpeg" alt="">
            </div>
            <div class="card-iconos">
                <li class="agrandar"><a href=""><span class=" agrandar fa-brands fa-facebook"></span></a> </li>
                <li class="agrandar"><a href=""><span class=" agrandar fa-brands fa-whatsapp"></span></a> </li>
                <li class="agrandar"><a href=""><span class=" agrandar fa-brands fa-facebook-messenger"></span></a> </li>
                <!-- <li href="#" class=" agrandar fa-brands fa-facebook" ></li>
                <li href="#" class=" agrandar fa-brands fa-whatsapp"></li>
                <li href="#" class=" agrandar fa-brands fa-facebook-messenger"></li> -->
            </div>
            <div class="card-contenido">
                <div class="info-personal desplazar">Alex Garcia</div>
                <div class="info-personal desplazar">Lima - Perú</div>
                <div class="info-personal desplazar">
                    <p>Programador, Profesor y Diseñador Web Full Stack</p>
                </div>
            </div>
            <div class="card-acciones">
                <button class="botones agrandar">
                    <span class="fa-brands fa-envelope"></span>
                    Enviar Correo
                </button>
            </div>
        </div>
    </div>
</body>
</html>