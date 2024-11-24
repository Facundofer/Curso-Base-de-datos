<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
</head>
<header>
    <div class="Logo">
        <img src="fotos/ron1.png" alt="ron">
    </div>
    <div class="Menu">
        <ul class="menuitem">
            <li><button><a href="index.html">Inicio</a></button></li>
            <li><button><a href="#Conocimientos">Conocimientos</a></button></li>
            <li><button><a href="#Experiencia">Experiencia</a></button></li>
        </ul>
    </div>
</header>
<body>
    <div class="perfil">
        <img src="fotos/file.jpg" alt="perfil">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Soluta, est quaerat atque harum minima rem aperiam suscipit. 
            <br>Voluptas deserunt nesciunt veniam nobis cum vel corrupti repudiandae corporis? Possimus, distinctio! Laudantium. 
            <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            <br> Placeat repellendus perferendis labore saepe nulla quaerat ipsam aliquid tempora praesentium quis adipisci ullam repudiandae, beatae tenetur eaque quo excepturi illo porro.
        </p>
    </div>

    <div class="carousel-container">
        <div class="carousel">
            <a href="https://www.ejemplo1.com" class="carousel-item">
                <img src="fotos/web-development.jpg" alt="Imagen 1">
            </a>
            <a href="https://github.com/Facundofer/Curso-Base-de-datos" class="carousel-item">
                <img src="fotos/php-proyect.jpg" alt="Imagen 2">
            </a>
            <a href="https://github.com/Facundofer/Programacion2" class="carousel-item">
                <img src="fotos/Programin-in-c.jpeg" alt="Imagen 3">
            </a>
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>

    <div class="Conocimientos" id="Conocimientos">
        <a href="index.php?foto=c"><img src="fotos/c-14-11-2024.png" alt="c"> </a>
        <a href="index.php?foto=css"><img src="fotos/css-14-11-2024.png" alt="css"> </a>
        <a href="index.php?foto=html"><img src="fotos/html-14-11-2024.png" alt="html"> </a>
        <a href="index.php?foto=php"><img src="fotos/php-14-11-2024.png" alt="php"> </a>
        <a href="index.php?foto=python"><img src="fotos/python-14-11-2024.png" alt="python"> </a>
        <a href="index.php?foto=hardware"><img src="fotos/Mantenimiento-Hardware-y-14-11-2024.png" alt="hardware"> </a>
    </div>
    <?php
    if (isset($_GET['foto'])) {
    $texto = $_GET['foto'];

    switch ($texto) {
        case "c":
            $textofinal = "Es el lenguaje con mas conocimientos adquiridos ya que en la facultad Nacional de Lujan es el lenguaje predeterminado. De aqui surgen mis paciones por la programacion. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
             $foto = ".fotos/ron1.png";
            break;
        case "css":
            $textofinal = "Tengo conocimientos intermedios de css, eh estado creando proyectos como pueden ver en mi github. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
            $foto = "fotos/ron1.png";
            break;
        case "html":
            $textofinal = "Tengo conocimientos de html al igual que css. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
            $foto = "fotos/ron1.png";
            break;
            case "php":
                $textofinal = "Estoy aprendiendo php y sql como base de datos, estoy creando proyectos en un futuro los veran en mi github. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
                $foto = "fotos/ron1.png";
                break;
        case "python":
            $textofinal = "Es el primer lenguaje que aprendi en la facultad, tengo conocimientos avanzados aunque no eh creado muchos proyectos aun con este lenguaje. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
            $foto = "fotos/ron1.png";
            break;
        case "hardware":
            $textofinal = "Eh realizado mantenimiento de hardware y software para la universidad Nacional de Lujan, ademas de para el colegio Parroqiual nuestra señora del Pilar, ademas del ambito social. (La imagen es representativa, una vez creado mas proyectos ira una portada del mismo)";
            $foto = "fotos/ron1.png";
            break;
    }
?>
    <div class="texto">
        <p> <?php echo $textofinal ?> </p>
        <img src="<?php echo $foto ?>" alt="menu">

    </div>
<?php }?>
    
    <div id="Experiencia">
        <ul>
            <li>Profesor particular de Informática</li>
            <li>Mantenimiento de hardware y software en el Instituto Parroquial Nuestra Señora de Pilar</li>
            <li>Mantenimiento de hardware y software en la Universidad Nacional de Luján</li>
        </ul>
    </div>

    <div class="form-container">
        <h2>Formulario de Contacto</h2>
        <form id="contact-form" action="enviado.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="contacto_imput" name="nombre" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" class="contacto_imput" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="comentarios">Comentarios:</label>
                <textarea id="comentarios" class="contacto_imput" name="comentarios" placeholder="Escribe tu comentario" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>
</body>

<footer>
    <div class="contacto">
        <ul>
            <li><a href="https://www.instagram.com/facufer30/"><img src="fotos/logotipo-de-instagram.png" alt="Instagram"></a></li>
            <li><img src="fotos/llamar.png" alt="Llamar">2304348154</li>
            <li><img src="fotos/correo-electronico.png" alt="Correo Electrónico"></li>
        </ul>
    </div>
</footer>
</html>
