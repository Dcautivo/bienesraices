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
    <title>Bienes Raices | Clientes</title>
</head>
    <section class="contenedor">
    <div class="body-cliente">
        <div class="card">
            <div class="face front">
                <img src="src/img/img1.jpeg" alt="imagen-japan">
                <h3>Japan</h3>
            </div>
            <div class="face back">
                <h3>Japan</h3>
                <p class="p-cliente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam illum ipsam ullam odio nemo molestiae aliquam pariatur itaque alias architecto cumque.</p>
                <div class="link">
                    <a href="#">Detalles</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face front">
                <img src="src/img/img2.jpeg" alt="imagen-japan">
                <h3>Spain</h3>
            </div>
            <div class="face back">
                <h3>Spain</h3>
                <p class="p-cliente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam illum ipsam ullam odio nemo molestiae aliquam pariatur itaque alias architecto cumque.</p>
                <div class="link">
                    <a href="#">Detalles</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face front">
                <img src="src/img/img3.jpeg" alt="imagen-japan">
                <h3>Perú</h3>
            </div>
            <div class="face back">
                <h3>Perú</h3>
                <p class="p-cliente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam illum ipsam ullam odio nemo molestiae aliquam pariatur itaque alias architecto cumque.</p>
                <div class="link">
                    <a href="#">Detalles</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    
</html>

<?php

  incluirTemplate('footer');

  ?> 
