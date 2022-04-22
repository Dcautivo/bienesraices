<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>  


    <main class="contenedor seccion contenido-centrado">
      <h1>Nuestro Blog</h1>

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
            <p>Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
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
            <p>Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
            <p>
              Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog"><!--Inicio >Blog-->
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp">
            <source srcset="build/img/blog3.jog" type="image/jpg">
            <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php" class="">
            <h4>Terraza en el techo de tu casa</h4>
            <p>Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
            <p>
              Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
            </p>
          </a>
        </div>
      </article><!--Fin de Blog-->
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog4.webp" type="image/webp">
            <source srcset="build/img/blog4.jog" type="image/jpg">
            <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php" class="">
            <h4>Guía para la decoración de tu hogar</h4>
            <p>Escrito el: <span>20/20/2021</span> por: <span>Admin</span> </p>
            <p>
              Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article>
    </main>

<?php

incluirTemplate('footer');

?> 
