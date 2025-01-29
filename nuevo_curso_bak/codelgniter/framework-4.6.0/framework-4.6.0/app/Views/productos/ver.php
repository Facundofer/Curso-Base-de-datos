<h2>Detalles</h2>
<?php if(isset($producto)): ?>
    <p><strong>ID:</strong> <?= $producto['id'] ?></p>
    <p><strong>Nombre:</strong> <?= $producto['nombre'] ?></p>
    <p><strong>Descripcion:</strong> <?= $producto['descripcion'] ?></p>
    <p><strong>Precio:</strong> <?= $producto['precio'] ?></p>

<a href=" <?= base_url('productos')?>">Volver al listado</a>

<?php else: ?>
    <p>Producto no encontrado</p>
    <?php endif;?>