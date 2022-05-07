<?php

//Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$nombres = 'Dante';
$apellidos = "Cautivo";
$email = 'dante@correo.com';
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (nombres, apellidos, email, password) VALUES ('${nombres}','${apellidos}','${email}', '${passwordHash}'); ";

echo $query;

// exit;
//Agregarlo a la base de datos
mysqli_query($db, $query);

?>

<h1>Estoy Cargando.......</h1>