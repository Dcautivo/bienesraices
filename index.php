<?php

require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);


?>   

    <main class="contenedor seccion">
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
    </main>
    <!--Inicio seccion de anuncios-->
    <section class="seccion contenedor">
      <h2>Casas y Depas en Venta</h2>

      <?php

        $limite = 3;
        include 'includes/templates/anuncios.php';


      ?>
      
      <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
      </div>
    </section>
    <!--Inicio-->
    <!--Inicio de Contacto-->
    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
      <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section><!--Fin Contacto-->
    <!--Inicio de Blog-->
    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog"><!--Inicio >Blog-->
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp">
              <source srcset="build/img/blog1.jog" type="image/jpg">
              <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.php" class="">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="informacion-meta" >Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
              <p>
                Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
              </p>
            </a>
          </div>
        </article><!--Fin de Blog-->
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp">
              <source srcset="build/img/blog2.jog" type="image/jpg">
              <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.php" class="">
              <h4>Guía para la decoración de tu hogar</h4>
              <p class="informacion-meta" >Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
              <p>
                Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.
              </p>
            </a>
          </div>
        </article>
      </section>

      <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
          <blockquote>
            El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
          </blockquote>
          <p>- Dante Cautivo Vega</p>
        </div>
      </section>
    </div>
    <!-- Inicio Colaboradores -->
    <section>
    <h1>Nuestros Colaboradores</h1>
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
                <span><i class="fa-solid fa-envelope"></i></span>
                    Enviar Correo
                </button>
            </div>
        </div>
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
                <span><i class="fa-solid fa-envelope"></i></span>
                    Enviar Correo
                </button>
            </div>
        </div>
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
                <span><i class="fa-solid fa-envelope"></i></span>
                    Enviar Correo
                </button>
            </div>
        </div>
    </div>
    </section>
    
<?php

incluirTemplate('footer');

?> 