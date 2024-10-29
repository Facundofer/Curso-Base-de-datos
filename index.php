<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Adora</title>
</head>
<header>
    <div id="NombreLogo">   
        <a href="#"><img src="fotos/gamba.png" alt="Adora"></a> 
    </div>
    <div id="MenuLista">
        <ul>
            <button><li><a href="index.php">Inicio</a></li></button>
            <button><li><a href="#footerinfo">Contacto</a></li></button>
        </ul>
    </div>
</header>
<body>
    <div id="Logo">   
        <img src="fotos/icon-1.png" alt="Logo"> 
    </div>
    <section id="VideoFondo">
        <div class="Video">
             <video controls autoplay loop playsinline muted width="100%">
                <source src="fotos/www.adoraestaciondecarnes.com - Adora Estacion de Carnes (1080p, h264, youtube).mp4" type="video/mp4">
                </video>
        </div>
    </section>
    <section class="fotos1">
            <div class="pes">
            <img src="fotos/1.png" alt="">
        </div>
        <div class="chancho">
            <img src="fotos/2.png" alt="">
        </div>
        <div class="t-bon">
            <img src="fotos/3.png" alt="">
        </div>
        <div class="vaca">
            <img src="fotos/4.png" alt="">
        </div>
        <div class="pollo">
            <img src="fotos/5.png" alt="">
        </div>
    </section>
    <section class = "informacion">
        <h3>Oprime en una de las fotos de abajo para obtener informacion</h3>
        <ul>
            <li id="fotol1"><a href="index.php?foto=lu"><img src="fotos/Entrada.jpg" alt="historia"> </a></li>
            <li id="fotol2"><a href="index.php?foto=co"><img src="fotos/gallery-11.jpg" alt="comida"> </a></li>
            <li id="fotol3"><a href="index.php?foto=hi"><img src="fotos/gallery-9.jpg" alt="lugar"> </a></li>
        </ul>  
    </section>
<?php
    if (isset($_GET['foto'])) {
    $texto = $_GET['foto'];

    switch ($texto) {
        case "hi":
            $textofinal = "General Rodríguez debe gran parte de su desarrollo y prosperidad a una conocida industria láctea local fundada,
             en el año 1929, por Teresa Aiello y Antonino Mastellone.
             Un emprendimiento que impulsó y alimentó la economía local. La tercera generación (Florencia, Gerardo e Ignacio)
             no desperdició el trabajo de los fundadores y tuvo la capacidad de diversificar sus horizontes sumando algunos emprendimientos gastronómicos.
             El último se inauguró en 2018: un restaurante de carnes que ocupa una impactante casona colonial ubicada en la Plaza Sarmiento.
             Un homenaje afectuoso a la abuela Adoración.";
             $foto = "./fotos/loshermanosbotta.jpeg";
            break;
        case "co":
            $textofinal = "El especial del dia.";
            $foto = "./fotos/menu.png";
            break;
        case "lu":
            $textofinal = "Servicio de Miercoles a sábado por la noche y domingos mediodía. Reservas unicamente telefónicas de 10:30 am 19:00 pm de Lunes a Sabados al 1126052562.";
            $foto = "./fotos/salon.jpg";
            break;
    }
?>
    <div class="texto">
        <p> <?php echo $textofinal ?> </p>
        <img src="<?php echo $foto ?>" alt="menu">

    </div>
<?php }?>
<footer> 
    <div id="footerinfo">
        <img src="fotos/gamba.png" alt="logo">
        <ul>
            <li><img src="fotos/insta.png" alt="logo" id="logoinsta"><a href="https://www.instagram.com/adoraestaciondecarnes/">Instagram</a></li>
            <li><img src="fotos/telefono.png" alt="logo" id="logotelefono">11 2605-2562</li>
            <li><img src="fotos/mapa.png" alt="logo" id="logomapa"><a href="https://www.google.com.ar/maps/place/Adora+Estacion+de+Carnes/@-34.6094771,-58.9562982,17z/data=!3m1!4b1!4m5!3m4!1s0x95bc8f6933cb309f:0x26d0d6701520c460!8m2!3d-34.6094771!4d-58.9541095">Int. Manny 735</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
