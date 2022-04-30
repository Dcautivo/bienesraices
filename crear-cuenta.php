<?php

        require 'includes/funciones.php';

        incluirTemplate('header');


        ?>  
    
    <form action="" method="POST" id="form" class="body">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="" id="name" required><span class="barra"></span>
                <label for="" class="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="" id="name" required><span class="barra"></span>
                <label for="" class="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="name" required><span class="barra"></span>
                <label for="" class="">Password</label>
            </div>

            <button class="" type="submit">Registrarte</button>
        
        </div>
    </form>