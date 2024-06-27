<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>
<div class="container-sm my-4">
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title text-success">Tareas</h5>
                    <p class="card-text display-4">3</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title text-primary">Tareas Realizadas</h5>
                    <p class="card-text display-4">1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title text-warning">Tareas Pendientes</h5>
                    <p class="card-text display-4">1</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm">
<a href="addTareaPersonal.php" class="btn btn-success">Agregar Tarea</a>
</div>


</div>
<div class="container-sm my-4">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Search</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
                    aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSearch">
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-sm my-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dificultad</th>
                        <th scope="col">Fecha de Entrega</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>2023-06-15</td>
                        <td>Pendiente</td>
                        <td>
                            <a href="edit_task.html?id=1" class="btn btn-primary btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>2023-07-20</td>
                        <td>Realizado</td>
                        <td>
                            <a href="edit_task.html?id=2" class="btn btn-primary btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>Bird</td>
                        <td>2023-08-30</td>
                        <td>Pendiente</td>
                        <td>
                            <a href="edit_task.html?id=3" class="btn btn-primary btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>