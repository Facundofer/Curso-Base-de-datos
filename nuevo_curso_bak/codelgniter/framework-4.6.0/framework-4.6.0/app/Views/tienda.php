<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda</h1>
    <H2>Productos</H2>
    <ul>
        <?php  foreach ($Productos as $Producto): ?>
            <li>
                <?php echo $Producto ['Nombre']; ?> - <?php echo $Producto ['precio']; ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>