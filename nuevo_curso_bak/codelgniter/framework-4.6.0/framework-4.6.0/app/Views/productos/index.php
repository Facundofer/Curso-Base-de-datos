
    <h2>Productos</h2>
    <table class= "tabla">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php  foreach($productos as $producto) :?>
                <tr>
                    <td><?= $producto ['id']?></td>
                    <td><?= $producto ['nombre']?></td>
                    <td><?= $producto ['precio']?></td>
                    <td>
                        <a href="<?= base_url('productos/ver/' . $producto['id']) ?>">Ver más</a>
                    </td>
                </tr>

                <?php endforeach ?>
        </tbody>

    </table>
