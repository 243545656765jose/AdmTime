<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/header.php';
?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container-sm">
        <div class="card shadow-lg rounded bg-light">
            <div class="card-body p-5">
                <h2 class="text-center mb-4 text-primary">Administrador de Tareas</h2>
                <?php
                if (isset($_GET['error'])) {
                    echo '<div class="alert alert-danger">Credenciales inválidas. Por favor, inténtelo de nuevo.</div>';
                }
                ?>
                <form action="/ADMPersonal/app/actions/users/login.php" method="post" id="login">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Ingresa tu nombre de usuario" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                    </div>
                </form>
                <div class="text-center">
                    <p>¿No tienes una cuenta? <a href="/ADMPersonal/app/public/php/register.php" class="text-primary">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/shared/footer.php';
?>
