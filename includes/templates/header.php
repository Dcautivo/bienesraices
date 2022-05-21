
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
    <!-- Slider -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css"> -->
    <!-- <title>Bienes Raices</title> -->
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="src/scss/layout/_redes.scss">
    <link rel="icon" href="src/img/favicon.ico">
    
  </head>
  <body>
  <!-- Inicio Redes Sociales -->
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
  <div class="imagen-slider">
    <!-- Inicio Imagen Slider -->
    <div class="slider">
        <div class="slides">
            <!--Botton Radio Inicio -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!--Botton Radio Fin -->
            <!-- Inicio de Slider -->
            <div class="slide primero">
                <img src="build/img/slider1.png" alt="Imagen Slider" width="100%">
            </div>
            <div class="slide">
                <img src="build/img/slider2.png" alt="Imagen Slider">
            </div>
            <div class="slide">
                <img src="build/img/slider3.png" alt="Imagen Slider">
            </div>
            <!-- Fin Slider -->
            <!-- Primero Navegacion Automatico -->
            <div class="navegacion-auto">
                <div class=" auto auto-btn1"></div>
                <div class=" auto auto-btn2"></div>
                <div class=" auto auto-btn3"></div>
            </div>
            <!-- Fin Navegacion Automatico -->
        </div>
        <!-- Primer Navegacion Manual -->
            <div class="navegacion-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        <!-- Fin Navegacion Manul -->
    </div>
    <script type="text/javascript">
    var slider = 1;
    setInterval(function(){
        document.getElementById('radio' + slider).checked = true;
        slider++;
        if(slider > 3){
            slider =1;
        }
    }, 5000);
  </script>
<!-- Fin Imagen Slider -->
  </div>
      
      <header class="header  <?php echo  $inicio  ? 'inicio' : ''; ?>">
          
          <div class="contenedor contenido-header">
            <div class="barra">
              <a class="logo logo-header" href="/">
                <img src="/build/img/logo.svg" alt="Logo de Bienes Raices" />
              </a>
              
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
   <script type="text/javascript" src="build/js/slider.js"></script>
</html>
