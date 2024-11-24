<?php
    $nombre_form = $_POST ['nombre'];
    $email_form = $_POST ['email'];
    $comentarios_form = $_POST ['comentarios'];

    $Conexion = mysqli_connect('sql312.infinityfree.com', 'if0_37598180', 'HW4RqAYZhRBp', 'if0_37598180_curso_Back') or exit("No se pudo conectar a la base de datos");

    mysqli_query($Conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$email_form', '$comentarios_form')");
    mysqli_close($Conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mensaje-enviado">
        <h1>¡Tu mensaje fue enviado!</h1>
        <p>Gracias por ponerte en contacto. Responderemos a tu mensaje lo antes posible.</p>
        <a href="index.php" class="volver">Volver a la página principal</a>
    </div>
</body>
</html>
