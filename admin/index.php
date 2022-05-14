<?php

require '../includes/funciones.php';
$auth = estarAutenticado();

if(!$auth) {
  header('Location: /');
}


//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Enviar información de vendedores
$queryVendedores = "SELECT * FROM vendedores";
//Consultamos la bd
$resultadoVendedores = mysqli_query($db, $queryVendedores);
//Construimos un arreglo con los vendedores
$vendedores = [];
while($vendedor = mysqli_fetch_assoc($resultadoVendedores)) {
  $vendedores[] = $vendedor;
}

//Escribir el Query de propiedades
$query = "SELECT * FROM propiedades";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;

//Boton Eliminar
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if($id) {

    //Eliminar el archivo
    $query = "SELECT imagen FROM propiedades WHERE id = ${id}";

    $resultado = mysqli_query($db, $query);
    $propiedad = mysqli_fetch_assoc($resultado);

    unlink('../imagenes/' . $propiedad['imagen']);

    //Eliminar la Propiedad
    $query = "DELETE FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);

    if($resultado) {
      header('location: /admin?resultado=3');
    }
  }
}

//Incluye un template

// incluirTemplate('header');


?>  
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
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="icon" href="src/img/favicon.ico">
  </head>
  <body>
      <header class="admin-header">
          <div class="contenedor contenido-header">
            <div class="barra">
              <a class="logo" href="/">
                <img src="/build/img/logo.svg" alt="Logo de Bienes Raices" />
              </a>
          
              <!--Dark Mode-->
              <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="icono menu responsive">
              </div>
              
              <div class="derecha">
                <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                <nav class="navegacion">
                  <a href="nosotros.php">Nosotros</a>
                  <a href="anuncios.php">Anuncios</a>
                  <a href="blog.php">Blog</a>
                  <a href="contacto.php">Contacto</a>
                  <?php if($auth): ?>
                    <a  class="btn-iniciar" href="cerrar-sesion.php">Cerrar Sesión</a>
                   <?php endif; ?> 
                </nav>
              </div>

            </div><!--Barra-->

            <!-- <?php
              // if($inicio) {
                // echo "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";
              // }
            ?> -->
            
          </div>
    </header>
  </body>
</html>
<!-- <script src="https://kit.fontawesome.com/1263a3fbcb.js" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">

    <main class="contenedor seccion">
      <h1>Administrador de Bienes Raices</h1>
    <!-- Alerta cuando se crea un anuncio -->
      <?php if( intval($resultado) ===1): ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
        <!-- Alerta cuando se actualiza un anuncio -->
      <?php elseif(intval($resultado) ===2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>  
        <!-- Alerta cuando se elimina un anuncio -->
      <?php elseif(intval($resultado) ===3): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>  
      <?php endif; ?>

   
      <a id="open" href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
      <!-- <button id="open">Nueva Propiedad</button> -->
        
      <table class="propiedades"> 
        <thead>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <!-- <th>Imagen</th> -->
            <th>Precio</th>
            <th>Habitaciones</th>
            <th>WC</th>
            <th>Estacionamiento</th>
            <th>Vendedor</th>
            <th>Fecha</th>

            <th>Acciones</th>
          </tr>
        </thead>

        <tbody><!-- Mostrar los Resultados -->
              
        <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <?php foreach($vendedores as $vendedor): ?>
          <tr>
       
            <td><?php echo $propiedad['id'];?></td>
            <td class="titulo-tabla"><?php echo $propiedad['titulo'];?></td>
            <!-- <td> <img src="imagenes/<?php echo $propiedad['imagen'];?>" class="imagen-tabla"> </td> -->
            <td>$ <?php echo $propiedad['precio'];?></td>
            <td><?php echo $propiedad['habitaciones'];?></td>
            <td><?php echo $propiedad['wc'];?></td>
            <td><?php echo $propiedad['estacionamiento'];?></td>
            <td><?php echo $vendedor['nombre']. " " . $vendedor['apellido']; ?></td>
            <td><?php echo $propiedad['creado'];?></td>
            
            
            <td>
                  <!-- Boton Eliminar -->
                <form method="POST" class="w-100" >

                    <button class="rojo-tabla" type="hidden" name="id" value="<?php echo $propiedad['id'];?> "><i class="fa-solid fa-trash-can"></i>Eliminar</button>

                </form>
                
                
                  <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?> " class="amarillo-tabla"><i class="fa-solid fa-pencil"></i>Actualizar</a>
            </td>
          </tr>

           <?php endforeach; ?>
          <?php endwhile; ?> 

        </tbody>

      </table>
      
    </main>

    
     
<?php

//Cerrar la conexion
mysqli_close($db);

incluirTemplate('footer');

?> 