<?php
require 'includes/funciones.php';
incluirTemplate('header');

?> 

    <main class="contenedor seccion">
      <h1>Conoce sobre Nosotros</h1>

      <div class="contenido-nosotros">
        <div class="nosotros">
          <div class="imagen-nosotros"></div>
          <!-- <picture class="imagen-nosotros">
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <source srcset="build/img/nosotros.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
          </picture> -->
        </div>

        <div class="texto-nosotros">
          <blockquote>
            25 años de Experencia
          </blockquote>
          <p>By injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
        </div>

      </div>

    </main>

    <section class="contenedor seccion">
      <h1>Más Sobre Nosotros</h1>
      <!--Inicio Iconos-->
      <div class="iconos-nosotros">
        <div class="icono">
          <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
          <h3>Seguridad</h3>
          <p>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible</p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono seguridad" loading="lazy">
          <h3>Precio</h3>
          <p>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible</p>
        </div><div class="icono">
          <img src="build/img/icono3.svg" alt="Icono seguridad" loading="lazy">
          <h3>A Tiempo</h3>
          <p>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible</p>
        </div>
      </div><!--Fin Iconos-->
    </section>

    <?php

    incluirTemplate('footer');

    ?> 
