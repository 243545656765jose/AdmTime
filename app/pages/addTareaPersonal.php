<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>
<div class="container-sm my-4 d-flex justify-content-center">
    <div class="container-fluid p-4 shadow rounded bg-light">
        <form action="" class="form-inline">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fecha de entrega</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="mb-3">
                <label for="dificultad" class="form-label">Dificultad</label>
                <input type="number" class="form-control" name="dificultad" id="dificultad" min="1" max="3" placeholder="1-3">
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>
