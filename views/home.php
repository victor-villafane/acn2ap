    
    <?php if( isset($_SESSION["usuario"]) ) { ?>
        <a class="btn btn-outline-primary m-3" href="index.php?page=nuevoProducto">Nuevo producto</a>
    <?php }?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION["productos"] as $producto) {
                if ($producto["disponible"]) {
            ?>
                    <tr>
                        <td>
                            <img src="<?= $producto["imagen"] ?>" alt="" width="50px">
                        </td>
                        <td>
                            <?= $producto["nombre"] ?>
                        </td>
                        <td>
                            <?= colocarSimbolo($producto["precio"]) ?>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>