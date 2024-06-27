<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>

<div class="container-sm my-4 d-flex justify-content-center">
    <div class="container-fluid p-4 shadow rounded bg-light">
        <h2 class="mb-4">Registro</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Edad</label>
                <input type="number" class="form-control" name="age" id="age" min="1" placeholder="Edad" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Estado Actual</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="" disabled selected>Seleccione su estado actual</option>
                    <option value="universidad">Universidad</option>
                    <option value="escuela">Escuela</option>
                    <option value="autodidacta">Autodidacta</option>
                    <option value="trabajando">Trabajando en una empresa</option>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Cancelar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>
