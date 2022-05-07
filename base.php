<?php

require'includes/funciones.php';

incluirTemplate('header');


?>   


    <main class="contenedor seccion">
      <h1>Base</h1>
    </main>

    <footer class="footer seccion">
      <div class="navegacion contenedor-footer">
        <a href="nosotros.php">Nosotros</a>
        <a href="anuncios.php">Anuncios</a>
        <a href="blog.php">Blog</a>
        <a href="contacto.php">Contacto</a>
      </div>

      <p class="copyright">Todos los Derechos Reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>

RewriteBase /
RewriteBase On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.html -f
Rewriterule ^(.*)$ $1.html

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f
Rewriterule ^(.*)$ $1.php