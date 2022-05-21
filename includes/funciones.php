<?php

require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function incluirboton(string $nombre, bool $login = false) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function estarAutenticado() : bool {

    session_start();
    
    $auth = $_SESSION['login'];

    if($auth) {
        return true;
    }

    return false;
}