<?php

function conectarDB() :mysqli {
    $db = mysqli_connect('localhost:3308', 'root','root','bienes_raices');

    if(!$db) {
        echo "Error no se puedo conectar";
        exit();
    }

    return $db;
}