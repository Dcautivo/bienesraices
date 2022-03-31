<?php

require'includes/funciones.php';

incluirTemplate('header');


?>   
    
    
    <main class="contenedor seccion">
      <h1>Contacto</h1>

      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
      </picture>

      <h2>LLene el formulario de Contacto</h2>

      <form class="formulario">
        <fieldset>
          <legend>Información Personal</legend>

          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu Nombre" id="nombre">

          <label for="email">E-mail</label>
          <input type="email" placeholder="Tu Email" id="email">

          <label for="telefono">Telefóno</label>
          <input type="tel" placeholder="Tu Telefóno" id="telefono">

          <label for="mensaje">Mensaje</label>
          <input type="mensaje" placeholder="Escribe el mensaje" id="mensaje">
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>

          <label for="opciones">Vende o Compre</label>
          <select id="opciones">
            <option value="" disabled selected>--Selecione--</option>
            <option value="Compra" class="">Compra</option>
            <option value="Vende" class="">Vende</option>

            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
          </select>
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>

          <p>Como desea ser contactado</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

            <label for="contactar-email">E-mail</label>
            <input name="contacto" type="radio" value="mail" id="contactar-email">
          </div>

          <p>Si eligió teléfono, elija la fecha y la hora</p>

          <label for="fecha">Fecha</label>
          <input type="date" id="fecha">

          <label for="hora">Hora</label>
          <input type="time" id="hora" min="09:0" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
      </form>

    </main>

<?php

incluirTemplate('footer');

?> 
