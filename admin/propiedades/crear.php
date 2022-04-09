<?php

//Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

//Consultar para obtener los vendedores
$consulta ="SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//Areglo para mensaje de errores
$errores = [];

  $titulo ='';
  $precio = '';
  $descripcion = '';
  $habitaciones = '';
  $wc = '';
  $estacionamiento = '';
  $vendedorId ='';
//Ejecutar el codigo depues de que el usuario envie el formulario
//Informacion del servidor
//echo "<pre>";
//var_dump($_SERVER['REQUEST_METHOD']);
//echo "</pre>";

//***Enviar Informacion
if($_SERVER ['REQUEST_METHOD'] === 'POST') {
  
 //Imprime en la pantalla

  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";

  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']) ;
  $creado = date('Y/m/d');

  // Asignar files hacia una variable

    $imagen = $_FILES['imagen'];

    //Mostrar Errores
  if(!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }

  if(!$precio) {
    $errores[] = 'El precio es Obligatorio';
  }

  if( strlen($descripcion) < 50) {
    $errores[] = 'La descripcion es obligatoria y debe tener al menos 50 caracteres';
  }

  if(!$habitaciones) {
    $errores[] = 'El numero de habitaciones es obligatorio';
  }

  if(!$wc) {
    $errores[] = 'El numero de baños es obligatorio';
  }

  if(!$estacionamiento) {
    $errores[] = 'El numero de lugares de estacionamiento es obligatorio';
  }

  if(!$vendedorId) {
    $errores[] = 'Elige un vendedor';
  }

  if(!$imagen['name'] || $imagen['error'] ) {
    $errores[] = 'La imagen es obligatoria';
  }

  //Validar por tamaño (100kb máximo)

  $medida = 1000 * 1000;

  if($imagen['size'] >$medida) {
    $errores[] = 'La Imagen es muy pesada';
  }


  //Revisar que el array de errrores este vacio
  //Revisar el arreglo de errores
  if(empty($errores)) {

    /**Subida de Archivos */
    //Crear Carpeta
    $carpetaImagenes = '../../imagenes/';
    
    if(!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
    }

    //Generar un nombre unico
    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

    //Subir la imagen
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

    //Insertar a base de datos
    $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) 
    VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId') ";

   // echo $query;
  $resultado = mysqli_query($db, $query);

    if($resultado) {
      //Redireccionar al usuario
      header("Location: /admin?resultado=1");
    }
  }
  
}


  require '../../includes/funciones.php';
  incluirTemplate('header');

?>

  <main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>
  <!--Muestra Errores-->
    <?php foreach($errores as $error): ?>
      <div class="alerta error">
      <?php echo $error; ?>
      </div>
    <?php endforeach; ?>
<!--Inicio de Fomulario // enctype para subida de imagenes -->
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

                <label for="titulo">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio;?>">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/jpg, /image/png" name="imagen">
                

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" placeholder="Mensaje"><?php echo $descripcion;?></textarea>

            </fieldset>

            <fieldset>
              <legend>Información Propiedad</legend>

              <label for="habitaciones">Habitaciones:</label>
              <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejem.3" min="1" max="9" value="<?php echo $habitaciones;?>">

              <label for="habitaciones">Baños:</label>
              <input type="number" id="wc" name="wc" placeholder="Ejem.3" min="1" max="9" value="<?php echo $wc;?>">

              <label for="estacionamiento">Estacionamiento:</label>
              <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejem.3" min="1" max="9" value="<?php echo $estacionamiento;?>">

              <legend>Vendedor</legend>

              <select name="vendedor">
                <option value="">--Seleccione--</option>
                <!--Iteramos sobre los vendedores utilizando el metodo mysqli_fetch_assoc-->
                <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                  <!-- utilizamos un operador ternario para añadir el selected al vendedor -->
                  <option <?php echo $vendedorId === $vendedor['id'] ? 'selected': ''; ?> value="<?php echo $vendedor['id'];?>"> <?php echo $vendedor['nombre'] . " ". $vendedor['apellido']; ?> </option>

                <?php endwhile; ?>  
              </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
            <!--<button onclick="mostrar" value="Crear Propiedad" class="boton boton-verde" >Crear Propiedad</button>-->
         
    </form>
    <!--<a href="/admin" class="boton boton-verde">Volver</a>-->
    <!--<input type="submit" value="Crear Propiedad" class="boton boton-verde">-->

    
  </main>

<?php
//include '../../includes/templates/footer.php';
  incluirTemplate('footer');
?>