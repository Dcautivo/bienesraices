
<?php
  
  //Verificar si existe inicio de sesión
if(!isset($_SESSION)) {
  session_start();
}
  $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Bienes Raices</title> -->
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="src/scss/layout/_redes.scss">
    <link rel="icon" href="src/img/favicon.ico">
  </head>
  <body>
  <div class="container">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="https://es-la.facebook.com/" class="fa-brands fa-facebook"></a>
            <a href="#" class="fa-brands fa-youtube"></a>
            <a href="#" class="fa-brands fa-telegram"></a>
            <a href="#" class="fa-brands fa-whatsapp"></a>
            <a href="#" class="fa-brands fa-facebook-messenger"></a>
        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="icon-mas2 fa-solid fa-plus"></label>
        </div>
    </div>
      <header class="header  <?php echo  $inicio  ? 'inicio' : ''; ?>">
          <div class="contenedor contenido-header">
            <div class="barra">
              <a class="logo logo-header" href="/">
                <img src="/build/img/logo.svg" alt="Logo de Bienes Raices" />
              </a>
          
              <!--Dark Mode-->
              <!-- <div class="mobile-menu">
                <input type="checkbox" class="" id="btn-menu">
                  <label for="btn-menu" class="mobile-menu">
                    <span id="spn1"></span>
                    <span id="spn2"></span>
                    <span id="spn3"></span>
                  </label>
              </div> -->
              
              <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="icono menu responsive">
              </div>
              
              <div class="derecha">
                <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                <nav class="navegacion">
                  <a href="nosotros.php">Nosotros</a>
                  <a href="anuncios.php">Anuncios</a>
                  <!-- <a href="blog.php">Blog</a> -->
                  <a href="contacto.php">Contacto</a>
                  <a href="clientes.php">Clientes</a>
                  <!-- <a class="btn-iniciar" href="login.php">Iniciar sesión</a> -->
                  <?php if(!$auth): ?>
                    <a class="btn-iniciar" href="login.php">Iniciar Sesión</a>
                   <?php endif; ?> 
                  <!-- <a class="btn-iniciar" href="crear-cuenta.php">Registrate</a> -->
                  <?php if(!$auth): ?>
                    <a class="btn-iniciar" href="crear-cuenta.php">Registrate</a>
                   <?php endif; ?> 
                  <?php if($auth): ?>
                    <a  class="btn-iniciar" href="/cerrar-sesion.php">Cerrar Sesión</a>
                   <?php endif; ?> 
                </nav>
              </div>

            </div><!--Barra-->

             <?php
               if($inicio) {
                 echo "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";
               }
            ?> 
            <!-- <?php echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>" : ''; ?> -->
            
          </div>
    </header>
  </body>
</html>