   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="src/scss/layout/_slider.scss"> -->
</head>
<body>
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
                <img src="build/img/slider1.png" alt="Imagen Slider">
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
<!-- Fin Imagen Slider -->
 
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
</body>
</html>