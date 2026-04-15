<h1 class="text-center">Agregar nuevo auto</h1>
<div class="d-flex justify-content-center align-items-center">
    <div style="width: 100%; max-width: 350px">
        <form action="actions/nuevoAuto.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input class="form-control" type="text" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen: </label>
                <input class="form-control" type="text" name="imagen">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio: </label>
                <input class="form-control" type="text" name="precio">
            </div>
            <button class="w-100 btn btn-outline-primary" type="submit">Guardar</button>
        </form>
    </div>
</div>