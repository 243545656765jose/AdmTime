<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>

<div class="container my-5">
    <div class="profile-container">
        <h2 class="text-center mb-4 text-primary">Editar Perfil</h2>
        <form action="/ADMPersonal/app/public/php/update_profile.php" method="post" enctype="multipart/form-data">
            <div class="text-center mb-4">
                <img src="/ADMPersonal/app/public/img/default-profile.png" alt="Foto de Perfil" class="profile-image">
                <div class="mt-3">
                    <label for="profileImage" class="form-label">Subir Foto de Perfil</label>
                    <input type="file" class="form-control" id="profileImage" name="profileImage">
                </div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Nueva Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nueva Contraseña">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success btn-block">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>