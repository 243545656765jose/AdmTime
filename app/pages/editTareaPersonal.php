<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>

<div class="container my-5">
    <div class="form-container p-4 shadow rounded bg-light">
        <div class="form-title">Editar Tarea</div>
        <form action="update_task.php" method="post">
            <div class="mb-3">
                <label for="taskName" class="form-label">Nombre de la Tarea</label>
                <input type="text" class="form-control" name="taskName" id="taskName" placeholder="Nombre de la Tarea" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Descripción" required>
            </div>
            <div class="mb-3">
                <label for="dueDate" class="form-label">Fecha de Entrega</label>
                <input type="date" class="form-control" name="dueDate" id="dueDate" required>
            </div>
            <div class="mb-3">
                <label for="difficulty" class="form-label">Dificultad</label>
                <input type="number" class="form-control" name="difficulty" id="difficulty" min="1" max="3" placeholder="1-3" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="realizado">Realizado</option>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>