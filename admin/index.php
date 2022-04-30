<?php

//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el Query
$query = "SELECT * FROM propiedades";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

//Muestea mensaje condicional
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
require '../includes/funciones.php';

incluirTemplate('header');

?>   
<!-- <script src="https://kit.fontawesome.com/1263a3fbcb.js" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="src/scss/fontawesome/css/all.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody><!-- Mostrar los Resultados -->
          <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
          <tr>
            <td><?php echo $propiedad['id'];?></td>
            <td class="titulo-tabla"><?php echo $propiedad['titulo'];?></td>
            <td> <img src="imagenes/<?php echo $propiedad['imagen'];?>" class="imagen-tabla"> </td>
            <td>$ <?php echo $propiedad['precio'];?></td>

            
            
            <td>
                  <!-- Boton Eliminar -->
                <form method="POST" class="w-100" >

                    <button class="boton-rojo-tabla" type="hidden" name="id" value="<?php echo $propiedad['id'];?> "><i class="fa-solid fa-trash-can"></i>Eliminar</button>

                </form>
                  <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?> " class="boton-amarillo-tabla"><i class="fa-solid fa-pencil"></i>Actualizar</a>
            </td>
          </tr>

          <?php endwhile; ?>
           

        </tbody>

      </table>
      
    </main>

    
     
<?php

//Cerrar la conexion
mysqli_close($db);

incluirTemplate('footer');

?> 